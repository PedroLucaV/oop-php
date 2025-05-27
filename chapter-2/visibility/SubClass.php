<?php

class SubClass extends BaseClass{
    public function getParentProtect(): string{
        return $this->getProtectedPropertie();
    }
}