<?php

require_once "data/Programmer..php";

$company = new Company();
$company->programmer = new Programmer("Adhim");
var_dump($company);

$company->programmer = new BackendProgrammer("Adhim");
var_dump($company);

$company->programmer = new FrontendProgrammer("Adhim");
var_dump($company);

sayHelloProgrammer(new Programmer("Adhim"));
sayHelloProgrammer(new BackendProgrammer("Adhim"));
sayHelloProgrammer(new FrontendProgrammer("Adhim"));