<?php

require_once "data/Car.php";

use Data\{Avanza};

$car = new Avanza();
$car->drive();
$tire = $car->getTire();
echo $tire;