<?php

class User {
    public $logIn;
    public $cardDate;
    public $discount;

    public function __construct($logIn, $cardDate, $discount) {
        $this->logIn = $logIn;
        $this->cardDate = $cardDate;
        $this->discount = $discount;
    }

    public function accessUser() {
        if ($user1->logIn == "true") {
            set_discount(20);
        }
    }

}

$user1 = new User("true", "test", null);