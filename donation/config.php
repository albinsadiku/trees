<?php

/*
Template name: Config.php
*/
require_once "vendor/autoload.php";

use Omnipay\Omnipay;



//Ab5Gm96hP7SHYJI0hHVurWi0UVI8C2d3wgsE5925trBjg7GHy96vU3IDdZHed5ntNdntaBK6YeW61zpH

//EEuEZDlJgFJMGMRvugfHTcwf9jjJWbuyzwGxDyZkfYRLWFRl_dF36SeDrih_vikNSoZgR5tz7LLEyllR


define("CLIENT_ID",'Ab5Gm96hP7SHYJI0hHVurWi0UVI8C2d3wgsE5925trBjg7GHy96vU3IDdZHed5ntNdntaBK6YeW61zpH');
define("CLIENT_SECRET",'EEuEZDlJgFJMGMRvugfHTcwf9jjJWbuyzwGxDyZkfYRLWFRl_dF36SeDrih_vikNSoZgR5tz7LLEyllR');


define('PAYPAL_RETURN_URL', 'http://localhost/wpadvanced/success'); // this should be changed when hosted
define('PAYPAL_CANCEL_URL', 'http://localhost/wpadvanced/cancel'); // this should be changed when hosted
define('PAYPAL_CURRENCY', 'USD'); // set your currency here


//Connect to db
$severname = "localhost";
$db = "donations";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_errno) {
    echo "Not connected" . $e->getMessage();
}

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); // false when hosted

?>