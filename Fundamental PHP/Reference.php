<?php

$name = "Adhim";

$otherName = &$name; // assign by reference

$otherName = "Ryu";

echo $name . PHP_EOL;

// pass by reference

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// returning reference in function

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
echo $a . PHP_EOL;

$a = 200; // change value

$b = &getValue();
echo $b . PHP_EOL;