<?php

class Product {

    public $typeProduct;
    public $animal;
    public $price;

    public function __construct($typeProduct, $animal, $price) {
        $this->typeProduct = $typeProduct;
        $this->animal = $animal;
        $this->price = $price;

    }
    
}
