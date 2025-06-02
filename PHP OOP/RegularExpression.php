<?php

$matches = [];
$result = preg_match_all("/adhim|ajab|muh/i", "Muh Rofiadhim Rajab", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar anjing bangsat luu");

var_dump($result);

$result = preg_split("/[\s,-]/", "Muh Rofiadhim Rajab,Ryu-Tatsuya");

var_dump($result);