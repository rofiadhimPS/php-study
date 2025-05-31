<?php

interface HelloWord
{
    function sayHello(): void;
}

$helloWorld = new class("Adhim") implements HelloWord {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    
    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};
$helloWorld->sayHello();