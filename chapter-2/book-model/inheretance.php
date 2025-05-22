<?php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('Random Book', 'Jane Doe', 2000, 300);
$digitalBook = new DigitalBook('Random Book', 'Jane Doe', 2000, 1048);

print $physicalBook->print();
print $digitalBook->print();