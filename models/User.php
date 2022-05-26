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
        if ($this->logIn == "true") {
            return $this->discount = 20;
        }
    }

}

$user1 = new User("true", "test", null);