<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
$connection->exec("INSERT INTO comment(email, comment) VALUES ('adhim@test.com', 'hello')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;