<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comment(email, comment) VALUES ('ryu@tes.com', 'halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('ryu@tes.com', 'halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('ryu@tes.com', 'halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('ryu@tes.com', 'halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('ryu@tes.com', 'halo')");

$connection->rollBack();

$connection = null;