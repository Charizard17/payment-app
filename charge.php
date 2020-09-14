<?php
    require_once('vendor/autoload.php');

    $stripe = new \Stripe\StripeClient('sk_test_51HRGbCIv94jkZW9NkWmYVqIXbihGgBKq1locgedEuE0GzYegLB7gAKMkF4TtiEsNbCb3pXXwYs9ShZuLsVD42hpQ00BNuxpSRa');

    // Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $first_name = $_POST;

    $first_name = $POST['first_name'];
    $last_name = $POST['last_name'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];

    echo $token;