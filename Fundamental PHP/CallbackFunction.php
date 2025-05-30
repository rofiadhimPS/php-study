<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Adhim", "strtoupper");
sayHello("Adhim", "strtolower");

sayHello("Adhim", function ($name):string {
    return strtoupper($name);
});

sayHello("Adhim", fn($name) => strtolower($name));