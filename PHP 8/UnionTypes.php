<?php

class Example
{
    public string|bool|int|array $data;
}

$example = new Example();
$example->data = "Data";
$example->data = true;
$example->data = 123;
$example->data = [];

function sampleFunction(string|array $data): string|array
{
    if(is_string($data)){
        return "String";
    } else if (is_array($data)){
        return ["Array"];
    }
}

echo sampleFunction("Adhim") . PHP_EOL;
var_dump(sampleFunction(["Adhim"]));