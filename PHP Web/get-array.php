<?php
$strings = $_GET['string'];
$result = "";

foreach ($strings as $string) {
    $result .= " " . $string;
}   
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
    <h2>Total = <?= $result ?></h2>
</body>
</html>
