<?php

$name = "Muh Rofiadhim Rajab";

// dot operator
echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

// conversion data type
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.12";
var_dump($valueFloat);

// accessing character
$name = "Adhim";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

// Variable parsing
echo "Hello $name, now you study fundamental PHP" . PHP_EOL;

$var = "var";
echo "This is {$var}s" . PHP_EOL;


