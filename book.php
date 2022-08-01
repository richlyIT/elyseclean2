<?php
$nom = "neo lucem";

$servicetype = $_GET['servicetype'];
$SpecialRequest = $_GET['SpecialRequest'];
$frequency1 = $_GET['frequency1'];
$frequency2 = $_GET['frequency2'];
$frequency3 = $_GET['frequency3'];
$bedroom = $_GET['bedroom'];
$bathroom = $_GET['bathroom'];
$half_bathroom = $_GET['half_bathroom'];
$sq_ft = $_GET['sq_ft'];
$property4 = $_GET['property4'];
$property5 = $_GET['property5'];
$property6 = $_GET['property6'];
$property7 = $_GET['property7'];
$property8 = $_GET['property8'];
$property9 = $_GET['property9'];
$property10 = $_GET['property10'];
$property11 = $_GET['property11'];
$property12 = $_GET['property12'];
$servicedate = $_GET['servicedate'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$number = $_GET['number'];
$address = $_GET['address'];
$apartUnit = $_GET['apartUnit$apartUnit'];
$cardnumber = $_GET['cardnumber'];
$ExpDate = $_GET['ExpDate'];
$CCV = $_GET['CCV'];

echo "yooooooooooooooooooooooo".$cardNumber;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;          //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'richlystudiosit@gmail.com';                     //SMTP username
    $mail->Password   = 'd0vRb6BzSOjFm5gD';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('richlystudiosit@gmail.com', 'Richly Studios');
    $mail->addAddress('deoobomby@gmail.com');     //Add a recipient

    $body = "<p><strong>Hello</strong>, this is my first email with PHPMAILER \r"
    ."service type:    ".$servicetype."<br> \r"
    ."SPECIAL REQUEST:    ".$SpecialRequest."<br> \r"
    ."FREQUENCY:    ".$frequency1."<br> \r"
    ."FREQUENCY:    ".$frequency2."<br> \r"
    ."FRQUENCY:    ".$frequency3."<br> \r"
    ."BEDROOM:    ".$bedroom."<br> \r"
    ."BATH:    ".$bathroom."<br> \r"
    ."HALF BATHROOM ".$half_bathroom."<br> \r"
    ."SQ FT ".$sq_ft."<br> \r"
    ."PROPERTY 4:   ".$property4."<br> \r"
    ."PROPERTY 5:   ".$property5."<br> \r"
    ."PROPERTY 6:   ".$property6."<br> \r"
    ."PROPERTY 7:   ".$property7."<br> \r"
    ."PROPERTY 8:   ".$property8."<br> \r"
    ."PROPERTY 9:   ".$property9."<br> \r"
    ."PROPERTY 10:   ".$property10."<br> \r"
    ."PROPERTY 11:   ".$property11."<br> \r"
    ."PROPERTY 12:   ".$property12."<br> \r"
    ."SERVICE DATE:   ".$servicedate."<br> \r"
    ."FIRST NAME:   ".$firstname."<br> \r"
    ."LAST NAME:   ".$lastname."<br> \r"
    ."EMAIL:   ".$email."<br> \r"
    ."NUMBER:   ".$number."<br> \r"
    ."ADDRESS:   ".$address."<br> \r"
    ."APART / UNIT:   ".$apartUnit."<br> \r"
    ."CARD NUMBER:   ".$cardnumber."<br> \r"
    ."EXPIRATION:   ".$ExpDate."<br> \r"
    ."CCV:   ".$CCV."<br> </p>\r";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'This is a test email';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}