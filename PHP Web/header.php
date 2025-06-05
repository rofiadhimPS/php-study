<?php

header('Application: PHP App');
header('Author: Muh Rofiadhim');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client" . PHP_EOL;