<?php
namespace app\interfaces;

interface PaymentMethod {
    public function pay($amount);
}
