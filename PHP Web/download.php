<?php

if(isset($_GET['key']) && $_GET['key'] == 'download') {
    $file = __DIR__ . '/file/garuda.jpg'; // Specify the file to download
    if(file_exists($file)) {
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        readfile($file);
        exit();
    } else {
        http_response_code(404);
        echo "File not found.";
    }
} else {
    http_response_code(403);
    echo "Access denied.";
}