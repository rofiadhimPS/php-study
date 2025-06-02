<?php

$value = "A";
$result = "";

switch($value){
    case "A":
    case "B":
    case "C":
        $result = "You Passed!";
        break;
    case "D":
        $result = "You are not passed";
        break;
    case  "E":
        $result = "Maybe you are in the wrong major";
        break;
    default:
        $result = "What the hell with your score"; 
}

echo $result . PHP_EOL;

// Match Expression

$value = "D";
$result = match ($value) {
    "A", "B", "C" => "You Passed!",
    "D" => "You are not passed",
    "E" => "Maybe you are in the wrong major",
    default => "What the hell with your score"
};

echo $result . PHP_EOL;

$value = 80;

$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E",
};

echo $result . PHP_EOL;

// with conditional
$name = "Mr. Adhim";

$result = match (true) {
    str_contains($name, "Mr") => "Hello Sir",
    str_contains($name, "Mrs") => "Hello Mam",
    default => "Hello"
};
echo $result . PHP_EOL;