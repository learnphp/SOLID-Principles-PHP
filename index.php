<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use app\services\EmailMailer;
use app\services\PayPal;
use app\services\FileLogger;
use app\Order;

$payment = new PayPal();
$mailer = new EmailMailer();
$logger = new FileLogger();

$order = new Order($payment, $mailer, $logger);
$order->checkout(500);
