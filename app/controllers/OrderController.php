<?php
namespace app\controllers;

use app\services\PayPal;
use app\services\EmailMailer;
use app\services\FileLogger;
use app\Order;

class OrderController {
    public function checkout() {
        $payment = new PayPal();
        $mailer = new EmailMailer();
        $logger = new FileLogger();

        $order = new Order($payment, $mailer, $logger);
        $order->checkout(1000);
    }
}
