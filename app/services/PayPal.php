<?php
namespace app\services;

use app\interfaces\PaymentMethod;

class PayPal implements PaymentMethod {
    public function pay($amount) {
        echo "Paid $amount using PayPal\n";
    }
}
