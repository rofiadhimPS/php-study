<?php

class Zero 
{
    private  array $properties = [];

    public function __get($name)
    {
       return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }
}

$zero = new Zero();
$zero->firstName = "Muh";
$zero->middleName = "Rofiadhim";
$zero->lastName = "Rajab";

echo $zero->firstName . PHP_EOL;
echo $zero->middleName . PHP_EOL;
echo $zero->lastName . PHP_EOL;