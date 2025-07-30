<?php

namespace App\Test;

class Person
{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(?string $name): string
    {
        if ($name == null) throw new \Exception("Name is null");

        return "Hello $name, my name is {$this->name}.";
    }
}