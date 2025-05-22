<?php

class Product
{

    public function __construct(public $name = 'Soap', public $price = 100)
    {
        
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
