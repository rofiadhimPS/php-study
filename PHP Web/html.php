<?php

$title = "Hello World HTML PHP";
$body = "Hello World! HTMl PHP <br/>" . PHP_EOL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $body ?></h1>
</body>
</html>