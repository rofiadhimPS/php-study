<?php

require_once "data//Product.php";

$product = new Product("Appel", 10000);

// echo $product->name . PHP_EOL;

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();