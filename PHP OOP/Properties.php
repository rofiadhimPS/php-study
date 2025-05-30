<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Adhim";
$person->address = "Makassar";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;