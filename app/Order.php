<?php
namespace app;

use app\interfaces\PaymentMethod;
use app\interfaces\MailerInterface;
use app\interfaces\LoggerInterface;

class Order {
    private $paymentMethod;
    private $mailer;
    private $logger;

    public function __construct(PaymentMethod $paymentMethod, MailerInterface $mailer, LoggerInterface $logger) {
        $this->paymentMethod = $paymentMethod;
        $this->mailer = $mailer;
        $this->logger = $logger;
    }

    public function checkout($amount) {
        $this->paymentMethod->pay($amount);
        $this->mailer->send("Order placed successfully");
        $this->logger->log("Payment of $amount completed.");
    }
}
