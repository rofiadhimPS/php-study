<?php

$dateTime = new DateTime();
$dateTime->setDate(2002, 6, 3);
$dateTime->setTime(12,12,12,0); 

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now  = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Makassar"));
var_dump($now);

echo "Time now : " . $now->format("Y-m-d H:i:s") . PHP_EOL;

// parse date time

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-12-12 10:10:10", new DateTimeZone("Asia/Jakarta")); 
var_dump($date);