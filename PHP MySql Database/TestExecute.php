<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('ryu', 'Ryu', 'ryu@test.com');
SQL;

$connection->exec($sql);

$connection = null;