<?php

$array = [
    "firstName" => "Muh",
    "middleName" => "Rofiadhim",
    "lastName" => "Rajab",
];

$object = (object)$array;
var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

$arrays = (array)$object;
var_dump($arrays);

require_once "data/Person.php";

$person = new Person("Adhim", "Makassar");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);