<?php
        //SANITIZE POST ARRAY
        $post = filter_var_array($_POST, FILTER_SANITIZE_URL);
        $first_name = $post['first_name'];
        $last_name = $post['last_name'];
        $email = $post['email'];
        $token = $post['stripeToken'];
        $totalCount = $post['totalCount'];
        $serviceType = $post['serviceType'];
        $zipcode = $post['zipcode'];
        $serviceType = $post['serviceType'];
        $frequency = $post['frequency'];
        $bedroom = $post['bedroom'];
        $bathroom = $post['bathroom'];
        $half_bath = $post['half_bath'];
        $sq_ft = $post['sq_ft'];
        $hearUs = $post['hearUs'];
        $inputDate = $post['inputDate'];
        $firstname = $post['firstname'];
        $lastname = $post['lastname'];
        $Email = $post['Email'];
        $phone = $post['phone'];
        $address = $post['address'];
        $apartUnit = $post['apartUnit'];
        $propertyType = $post['propertyType'];
//PHP MAILER
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php ';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;          //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'richlystudiosit@gmail.com';                     //SMTP username
    $mail->Password   = 'EmGA7bwvhZB52sWJ';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('richlystudiosit@gmail.com', 'Richly Studios');
    $mail->addAddress('deoobomby@gmail.com');     //Add a recipient

    $body = "<h1></h1><br>
            <span>First name: ".$firstname."</span>
            <span>Last name: ".$lastname."</span>
            <span>Email: ".$Email."</span>
            <span>Address: ".$address."</span>
            <span>Phone: ".$phone."</span>
            <span>Apart Unit: ".$apartUnit."</span>
            <span>Date: ".$inputDate."</span>
            <span>How you hear about us: ".$hearUs."</span>
            <h2>Service details</h2>
            <span>Zip code: ".$zipcode."</span>
            <span>Property Type: ".$propertyType."</span>
            <span>Service type: ".$serviceType."</span>
            <span>Frequency: ".$frequency."</span>
            <span>Bedroom: ".$bedroom."</span>
            <span>Bathroom: ".$bathroom."</span>
            <span>Half Bath: ".$half_bath."</span>
            <span>Sq Ft: ".$sq_ft."</span>
    ";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'This is a test email';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    //STRIPE
    require_once('./vendor/autoload.php');
    /*require_once('./config/db.php');
    require_once('./lib/pdo_db.php');
    require_once('./models/Customer.php');
    require_once('./models/Transaction.php');
    */

    \Stripe\Stripe::setApiKey('sk_test_51LUMHzAFYYcpzGe9iBce3w1jAdywbXXU0hS6OMMhcK1IoypH2xn3OCX35Csbt0quc76rqRhEewWILhFX89rISSUK00iWigdpX1');


    //$servicetypestring;
    switch ($serviceType) {
        case '1':
            $servicetypestring = "Standard cleaning";
            break;
        case '2':
            $servicetypestring = "Deep cleaning";
            break;
        case '3':
            $servicetypestring = "Move In/Out cleaning";
            break;
        
        default:
            # code...
            break;
    }

    echo $totalCount."\r"."<br>";
    $total_payed_by_user = number_format($totalCount)."\r"."<br>";
    echo "Type ".gettype($total_payed_by_user)."\r"."<br>";
    $total_value = floatval($total_payed_by_user)."\r"."<br>";
    echo "Type ".gettype($total_value)."\r"."<br>";
    $valeur = floatval($total_value);
    echo "Type ".gettype($valeur)."\r"."<br>";
    echo number_format($valeur, 2);


    //$prix = $total_service_price;
    //$leprix = $prix*100;
    

    //Customer in stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source' => $token
    ));

    //Charge the customer
    $charge = \Stripe\Charge::create(array(
        'amount' => $valeur*100,
        'currency' => 'usd',
        'description' => $servicetypestring,
        'customer' => $customer->id
    ));

    //uncomment this to use mysql database  
    /*
    //Get customer data
    $customerData = [
        'id' => $charge->customer,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email
    ];

    //Instantiate Class Customer
    $Customer = new Customer();

    //Add customer
    $Customer->addCustomer($customerData);

    //Get Transaction data
    $transactionData = [
        'id' => $charge->id,
        'customer_id' => $charge->customer,
        'product' => $charge->description,
        'amount' => $charge->amount,
        'currency' => $charge->currency,
        'status' => $charge->status,
    ];

    // Instantiate Transaction
    $transaction = new Transaction();

    // Add Transaction To DB
    $transaction->addTransaction($transactionData);
    */

    header('Location:  success.php?tid='.$charge->id."&product=".$charge->description);
