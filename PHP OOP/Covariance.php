<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use Data\{Food, AnimalFood, CatShelter, DogShelter};


$catShelter = new CatShelter();
$cat = $catShelter->adopt("Katy");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter;
$dog = $dogShelter->adopt("Dogy");
$dog->eat(new Food());