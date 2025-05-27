<?php

require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
$subClass = new SubClass();

// print $subClass->publicProperties;
// print $subClass->getParentProtect();
// print $baseObject->getPrivatePropertie();
// print $baseObjsect->getProtectedPropertie();
print $subClass->getParentProtect();