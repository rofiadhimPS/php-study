<?php

require_once __DIR__ . "/Database.php";

$db = \Config\Database::getConnection();

echo "Connection successful!" . PHP_EOL;