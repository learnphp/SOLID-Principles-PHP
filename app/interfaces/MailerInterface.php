<?php
namespace app\interfaces;

interface MailerInterface {
    public function send($message);
}
