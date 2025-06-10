<?php

namespace App\Data;

class People
{
    public function __construct(private $name = null) 
    {
    }

    public function sayHello(string $name): string
    {
        return  "Hello $name, my name is $this->name";
    }

}