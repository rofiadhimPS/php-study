<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Katy";
$cat->run();

$dog = new Dog();
$dog->name = "Dogy";
$dog->run();

