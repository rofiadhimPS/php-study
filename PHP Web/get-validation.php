<?php

if(!isset($_GET['name']) || $_GET['name'] == '') {
    http_response_code(400);
    echo "Name is required.";
    exit();
}

$say = "Hello " . htmlspecialchars($_GET['name']);
?>
<html>
    <body>
        <h1>GET Example</h1>
        <h2><?= $say ?></h2>
    </body>
</html>