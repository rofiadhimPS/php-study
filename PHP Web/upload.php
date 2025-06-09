<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_tmp = $_FILES['upload_file']['tmp_name'];
    $file_size = $_FILES['upload_file']['size'];
    $file_error = $_FILES['upload_file']['error'];  

    move_uploaded_file($file_tmp, __DIR__ . '/file/' . $file_name);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
<?php if($_SERVER['REQUEST_METHOD'] == "POST"){ ?>
    <h1>File Upload Result</h1>
    <table>
        <tr>
            <td>File Name</td>
            <td><?= htmlspecialchars($file_name) ?></td>
        </tr>
        <tr>
            <td>File Type</td>
            <td><?= htmlspecialchars($file_type) ?></td>
        </tr>
        <tr>
            <td>File Size</td>
            <td><?= htmlspecialchars($file_size) ?> bytes</td>
        </tr>
        <tr>
            <td>File Temporary Location</td>
            <td><?= htmlspecialchars($file_tmp) ?></td>
        <tr>
            <td>File Error</td>
            <td><?= htmlspecialchars($file_error) ?></td>
        </tr>
    </table>
<?php } ?>

<h1>Form Upload</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="">File : 
        <input type="file" name="upload_file" id="" value="Choose File">
    </label>

    <input type="submit" name="" value="Upload" id="">
</form>
</body>
</html>