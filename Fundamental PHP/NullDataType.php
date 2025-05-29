<?php

$name = "Adhim";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// how to check variable is null
echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// how to delete variable
$example = "Adhim";
unset($example);
echo $example; // make a warning

// how to check variable is exist and not null
var_dump(isset($example));