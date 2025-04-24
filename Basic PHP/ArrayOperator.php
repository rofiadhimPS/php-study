<?php

$first = [
    "first_name" => "Rofiadhim",
];

$last = [
    "last_name" => "Rajab",
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Rofiadhim",
    "last_name" => "Rajab",
];

$b = [
    "last_name" => "Rajab",
    "first_name" => "Rofiadhim",
];

var_dump($a == $b);
var_dump($a === $b);
