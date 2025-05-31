<?php

require_once "helper/MathHelper.php";

use Helper\{MathHelper};

$helper = new MathHelper();

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Rofiadhim";
echo MathHelper::$name . PHP_EOL;

echo MathHelper::sum(10,10,10,10,10) . PHP_EOL;