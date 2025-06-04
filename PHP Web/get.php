<?php
$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Example</title>
</head>
<body>
    <h1>GET Example</h1>
    <h2><?= $say ?></h2>
</body>
</html>
