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
