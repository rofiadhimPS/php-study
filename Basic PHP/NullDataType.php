<?php

$name = "Nocta";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// check variable is null?
echo "Is Name Null?: ";
var_dump(is_null($name));

// delete variable
$example = "Nocta";
unset($example);

//check variable is exist?
var_dump(isset($example));


