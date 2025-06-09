<?php

session_start();

if ($_SESSION['login'] == true) {
    header('Location: /session/member.php');
    exit();
}

$error = '';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username  = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Dummy authentication for demonstration purposes
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header('Location: /session/member.php');
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if ($error): ?>
        <p style="color: red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <h1>Login</h1>
    <form action="/session/login.php" method="post">
        <label for="">Username :
            <input type="text" name="username" id="" value="">
        </label>
        <br>
        <label for="">Password :
            <input type="password" name="password" id="" value="">
        </label>
        <br>
        <input type="submit" name="Login" id="" value="Login">
    </form>
</body>
</html>