<?php
require_once "stripe-php-master/init.php";
// require_once 'houses.php';
$stripeDetails = array(
    "secretkey" => "sk_test_XWJtD82iyZyMRiW3yBcJrKiO",
    "publishablekey" => "pk_test_mtRg60iduly8eCQBxD7iQqVD"
);
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey($stripeDetails['secretkey']);