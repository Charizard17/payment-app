<?php
    require_once('vendor/autoload.php');

    \Stripe\Stripe::setApiKey('sk_test_51HRGbCIv94jkZW9NkWmYVqIXbihGgBKq1locgedEuE0GzYegLB7gAKMkF4TtiEsNbCb3pXXwYs9ShZuLsVD42hpQ00BNuxpSRa');

    // Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $first_name = $_POST;

    $first_name = $POST['first_name'];
    $last_name = $POST['last_name'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];

    // Create Customer in Stripe
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
    ));

    // Charge Customer
    $charge = \Stripe\Charge::create(array(
        "amount" => 5000,
        "currency" => "usd",
        "description" => "Intro To React Course",
        "customer" => $customer->id
    ));

    // Redirect to success
    header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);