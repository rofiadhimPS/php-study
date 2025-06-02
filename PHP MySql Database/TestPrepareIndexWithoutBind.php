<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "adhim";
$password = "adhim123";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

$success = false;
$find_user = null;
foreach ($statement as $row){
    $success = true;
    $find_user = $row["username"];
}

if($success){
    echo "Success to Login : " . $find_user . PHP_EOL;
} else {
    echo "Failed to Login" . PHP_EOL;
}


$connection = null;