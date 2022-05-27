<?php

include "/User.php";

trait Info {
    public $name;
    public $surname;
    public $age;
    
    public function verifyAge($param)
    {
        if (!is_int($param)) {
            throw new Exception($param . " " . "is not a number");
        } else {
            return "ok";
        }

    }
}