<?php

class Product {
    public $name = 'Soap';
    public $price;

    public function priceAsCurrency(){
        $priceAsCurrency = $this->price / 100;
        return $priceAsCurrency;
    }
}

$soapObject = new Product();
$soapObject->price = 500;
$priceAsCurrency = $soapObject->priceAsCurrency();

var_dump($priceAsCurrency) . PHP_EOL;