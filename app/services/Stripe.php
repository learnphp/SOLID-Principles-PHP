<?php
namespace app\services;

use app\interfaces\PaymentMethod;

class Stripe implements PaymentMethod {
    public function pay($amount) {
        echo "Paid $amount using Stripe\n";
    }
}
