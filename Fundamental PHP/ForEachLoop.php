<?php

$names = ["Muh", "Rofiadhim", "Rajab"];

for ($i = 0; $i < count($names); $i++){
    echo "Name $i : $names[$i]" . PHP_EOL;
}


// Using For Each Loop
foreach($names as $name){
    echo $name . PHP_EOL;
}

foreach($names as $index => $name){
    echo "$index = $name"  . PHP_EOL;
}

$person = [
    "first_name" => "Muh",
    "middle_name" => "Rofiadhim",
    "last_name" => "Rajab",
];

foreach ($person as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}