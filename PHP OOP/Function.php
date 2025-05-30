<?php

require_once "data/Person.php";

$adhim = new Person();
$adhim->name = "Adhim";
$adhim->sayHello("Adhim");

$ryu = new Person();
$ryu->name = "ryu";
$ryu->sayHello(null);

$adhim->info();
$ryu->info();