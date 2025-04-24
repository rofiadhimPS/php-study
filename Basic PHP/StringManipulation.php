<?php

// Dot (titik) Operator
$name = "Muh Rofiadhim Rajab";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// Conversion to Number and vice versa
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

// Accessing Character by Index

$name = "Adhim";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

// Variable Parsing
echo "Hello $name, Have a Good Study" . PHP_EOL;

// Variable Parsing with Curly Brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;

