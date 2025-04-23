<?php

$values = array(10, 9, 8, 7.6);
var_dump($values);

$names = ["Muh", "Rofiadhim", "Rajab"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Nocta";
var_dump($names);

unset($names[0]);
var_dump($names);

$names[] = "Muh";
var_dump($names);

var_dump(count($names));

// Array as Map

$nocta = array(
    "id" => "adhim",
    "name" => "Muh Rofiadhim Rajab",
    "age" => 22,
    "address" => [
        "city" => "Makassar",
        "country" => "Indonesia",
    ]
);
var_dump($nocta);

var_dump($nocta["id"]);

$dimenzi = [
    "id" => "nocta",
    "name" => "Muh Rofiadhim Rajab",
    "age" => 22,
    "address" => array (
        "city" => "Makassar",
        "country" => "Indonesia",
    )
];

var_dump($dimenzi["address"]["country"]);

// Array in Array

