<?php

setcookie("TestCookie", "TestValue");

header('Location: /show-cookie.php');
exit();