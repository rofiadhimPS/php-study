<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Data\People;

$people = new People('Adhim');
echo $people->sayHello('Ryu') . PHP_EOL;