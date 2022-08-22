<?php
    require_once('./vendor/autoload.php');
    /*require_once('./config/db.php');
    require_once('./lib/pdo_db.php');
    require_once('./models/Customer.php');
    require_once('./models/Transaction.php');
    */

    \Stripe\Stripe::setApiKey('sk_test_51LUMHzAFYYcpzGe9iBce3w1jAdywbXXU0hS6OMMhcK1IoypH2xn3OCX35Csbt0quc76rqRhEewWILhFX89rISSUK00iWigdpX1');

    //SANITIZE POST ARRAY
    $post = filter_var_array($_POST, FILTER_SANITIZE_URL);
    $first_name = $post['first_name'];
    $last_name = $post['last_name'];
    $email = $post['email'];
    $token = $post['stripeToken'];

    $prix = 78;
    $leprix = $prix*100;
    

    //Customer in stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source' => $token
    ));

    //Charge the customer
    $charge = \Stripe\Charge::create(array(
        'amount' => $leprix,
        'currency' => 'usd',
        'description' => 'House cleaning',
        'customer' => $customer->id
    ));

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
