<?php

include __DIR__ . "/Info.php";
include __DIR__ . "/User.php";

class Product extends User {

    use Info;

    public $typeProduct;
    public $animal;
    public $price;
    public $discount;

    public function __construct($typeProduct, $animal, $price, $discount, $name, $surname, $age) {
        $this->typeProduct = $typeProduct;
        $this->animal = $animal;
        $this->price = $price;
        $this->discount = $discount;
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;

    }
    
}

$obj = new Product ("cuccia", "cane", 20, true, "antonio", "acierno", "ciao");
try {
    echo $obj->verifyAge("ciao");
} catch(Exception $e) {
    echo "Eccezione:" . $e->getMessage();
}
