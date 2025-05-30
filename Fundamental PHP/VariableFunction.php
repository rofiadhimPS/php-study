<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionWillCall = "foo";
$functionWillCall();

$functionWillCall = "bar";
$functionWillCall();


function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Adhim","sampleFunction");
sayHello("Adhim", "strtoupper");
sayHello("Adhim", "strtolower");