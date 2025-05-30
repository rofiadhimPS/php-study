<?php

class Person
{
    var string $name;
    var ?string $address = null; // nullable properties
    var string $country = "Indonesia";

    function sayHello(?string $name)
    {
        if(is_null($name)){
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hi $name,  my name is {$this->name}" . PHP_EOL;
        }
    }
}