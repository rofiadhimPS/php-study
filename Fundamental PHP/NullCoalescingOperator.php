<?php

$data = [
    "action" => "Create",
];

// without null coalescing operator

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "nothing";
}

echo $action . PHP_EOL;

// null coalescing operator
$data = [];
$action = $data["action"] ?? "Nthing";

echo $action . PHP_EOL;
