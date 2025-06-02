<?php

function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// without named argument
sayHello("Muh", "Rofadhim", "Rajab");

// with named argument
sayHello(last: "Rajab", first: "Muh", middle: "Rofiadhim");
