<?php
class User {

    public $logIn;
    public $cardDate;
    

    public function __construct($logIn, $cardDate) {
        $this->logIn = $logIn;
        $this->cardDate = $cardDate;
    }

    /* public function accessUser() {
        if ($this->logIn == "true") {
            return $this->discount = 20;
        }
    } */

}


