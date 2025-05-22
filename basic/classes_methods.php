<?php

class Product
{
    public $name = 'Soap';
    public $price = 500;

    public function priceAsCurrency($currencySymbol= '$', $divisor=1) //Here we can use methods arguments
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency;
    }
}

$soapObject = new Product();
$priceAsCurrency = $soapObject->priceAsCurrency(currencySymbol: 'R$');

echo $priceAsCurrency;
