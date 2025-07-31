<?php

namespace Rofiadhim\Study\PHP\MVC\Controller;

use Rofiadhim\Study\PHP\MVC\App\View;

class HomeController
{
    function index()
    {
        $model = [
            "title" => "Home Page",
            "content" => "Welcome to the Home Page!"
        ];
        
        View::render('Home/index', $model);
    }

    function hello()
    {
        $model = [
            "title" => "Hello Page",
            "content" => "Hello from HomeController!"
        ];
        echo $model["content"];
    }
    
    function world()
    {
        $model = [
            "title" => "World Page",
            "content" => "World from HomeController!"
        ];
        echo $model["content"];
    }   

    function login()
    {
        $request = [
            "username" => $_POST['username'] ?? '',
            "password" => $_POST['password'] ?? ''
        ];

        $response = [
            "status" => "success",
            "message" => "Login successful!",
            "data" => $request
        ];
        echo json_encode($response);

    }
}