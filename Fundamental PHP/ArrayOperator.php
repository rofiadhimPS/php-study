<?php

$first = [
    "first_name" => "Muh",
];

$last = [
    "first_name" => "Rajab", // ignore
    "last_name" => "Rofiadhim",
];

// union operator
$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Muh",
    "last_name" => "Rofiadhim",
];

$b = [
    "last_name" => "Rofiadhim",
    "first_name" => "Muh",
];

var_dump($a == $b);
var_dump($a === $b);
