<?php

class BaseClass{
    public $publicProperties = 'Public can be accessed anywhere';

    protected $protectedProperties = 'The property or method can be accessed within the class and by classes derived from that class or subclass';

    private $privatePropertie = 'the property or method can ONLY be accessed within the declaring class'; //cant be accessed by subclass

    protected function getProtectedPropertie(): string{
        return $this->protectedProperties;
    }

    public function getPrivatePropertie(): string
    {
        return $this->privatePropertie;
    }
}