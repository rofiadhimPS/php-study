<?php

namespace Data;

require_once "Animal.php";

interface AnimalShelter 
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Cat // covariance
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Dog // covariance
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
