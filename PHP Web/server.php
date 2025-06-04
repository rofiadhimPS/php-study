<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <h1>$_SERVER</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SERVER as $key => $value): ?>
                <tr>
                    <td><?= htmlspecialchars($key) ?></td>
                    <td><?= htmlspecialchars($value) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>
</html>