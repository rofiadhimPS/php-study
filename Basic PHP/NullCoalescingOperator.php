<?php

$data = [
    "action" => "Create",
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "nothing";
}

echo $action . PHP_EOL;

// Null Coalescing Operator

$data = [];
$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;