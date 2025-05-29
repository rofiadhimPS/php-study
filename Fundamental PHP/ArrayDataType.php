<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Muh", "Rofiadhim", "Rajab"];
var_dump($names);

// How To Manipulate Array (Array Operation)
// Accessing Data in Array
var_dump($names[0]);

// change data in array
$names[0] = "Andi";
var_dump($names);

// delete data
unset($names[1]);
var_dump($names);

// add some data in array
$names[] = "Rofiadhim";
var_dump($names);

// count data in array
var_dump(count($names));

// Array as Map
$adhim = array(
    "id" => "adhim",
    "name" => "Muh Rofiadhim",
    "age" => 23,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia",
    ],
);
var_dump($adhim);
var_dump($adhim["name"]);
var_dump($adhim["address"]["country"]);


$budi = [
    "id" => "budi",
    "name" => "Budi Raharjo",
    "age" => 23,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia",
    ),
];
var_dump($budi);
var_dump($budi["name"]);
