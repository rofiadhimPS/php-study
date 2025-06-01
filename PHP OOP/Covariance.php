<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use Data\{CatShelter, DogShelter};


$catShelter = new CatShelter();
$cat = $catShelter->adopt("Katy");

$dogShelter = new DogShelter;
$dog = $dogShelter->adopt("Dogy");
