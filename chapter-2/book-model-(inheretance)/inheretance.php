<?php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$book = new Book('Random Book', 'Jane Doe', 1000);

$physicalBook = new PhysicalBook('Random Book', 'Jane Doe', 2000, 300);

print $physicalBook->print();