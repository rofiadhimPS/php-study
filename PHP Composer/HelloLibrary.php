<?php

require_once __DIR__ . '/vendor/autoload.php';

use Rofiadhim\ComposerHello\Customer;

$customer = new Customer("Adhim");
echo $customer->sayHello("Ryu") . PHP_EOL;

