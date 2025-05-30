<?php

require_once "data/Person.php";

$adhim = new Person("Adhim","Makassar");
$adhim->name = "Adhim";
$adhim->sayHello("Adhim");

$ryu = new Person("Ryu","Makassar");
$ryu->name = "ryu";
$ryu->sayHello(null);

$adhim->info();
$ryu->info();