<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comment(email, comment) VALUES ('adhim@tes.com', 'halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('adhim@tes.com', 'halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('adhim@tes.com', 'halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('adhim@tes.com', 'halo')");
$connection->exec("INSERT INTO comment(email, comment) VALUES ('adhim@tes.com', 'halo')");

$connection->commit();

$connection = null;