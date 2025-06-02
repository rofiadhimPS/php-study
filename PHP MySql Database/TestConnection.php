<?php

$host = "localhost";
$port = "3306";
$database = "learn_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "SUCCESS CONNECT TO DATABASE MYSQL" . PHP_EOL;

    // close connection
    $connection = null;
} catch(PDOException $exception) {
    echo "CONNECTION FAILED, ERROR MESSAGE : " . $exception->getMessage();
}


