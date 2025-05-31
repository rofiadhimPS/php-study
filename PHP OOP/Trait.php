<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Adhim");
$person->hello("Ryu");

$person->name = "Adhim";
var_dump($person);

$person->run();