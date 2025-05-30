<?php

$firstName = "Muh";
$lastName = "Rofiadhim";

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();