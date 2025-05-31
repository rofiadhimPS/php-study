<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Adhim";
$manager->sayHello("Ryu");

$vp = new VicePresident();
$vp->name = "Rofiadhim";
$vp->sayHello("Ryu");