<?php

class Product
{
    public $name;
    public $price;

    public function __construct($name = 'Soap', $price = 100){
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($currencySymbol = '$', $divisor = 1) //Here we can use methods arguments
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency;
    }
}

$product = new Product(name: 'Tyres', price: 200);
print $product->name . PHP_EOL;
print $product->price . PHP_EOL;