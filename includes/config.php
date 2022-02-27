<?php
require_once "vendor/autoload.php";

use Omnipay\Omnipay;

define('CLIENT_ID', 'AWlva1gmhyZrVdvSC4616JuqIBqwUfB-23AQw0KW31MSvTqHSiCSRW7pgwyWfQI2_Nq4_QmG_uykyIMA');
define('CLIENT_SECRET', 'EMIhSrGbSwrDHOomhFVsr9sLBkzH5iTuDBNbt9_JiYTaYAJ002K1n8YFCZyAFRw01xFs3MMKosBkycnu');

define('PAYPAL_RETURN_URL', 'http://localhost/VSMS%20Final/payment-success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/VSMS%20Final/payment-cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here

// Connect with the database
$db = new mysqli('localhost', 'root', '', 'my_database');

if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live
