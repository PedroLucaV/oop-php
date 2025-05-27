<?php

require_once 'Counter.php';
require_once 'Connection.php';

$connection1 = new Connection();

print Connection::$count . PHP_EOL;

$connection2 = new Connection();

print Connection::$count . PHP_EOL;

// print Counter::$count;