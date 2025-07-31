<?php

namespace Rofiadhim\Study\PHP\MVC\App;

class Router 
{
    private static array $routes = [];

    public static function add(string $method, string $path, string $controller, string $function): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public static function run(): void
    {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($route['method'] == $method && $route['path'] == $path) {
                $function = $route['function'];
                $controllerClass = $route['controller'];
                
                // Create instance of controller
                $controller = new $controllerClass();
                $controller->$function();
                return;
            }
        }

        // If no route matched, you can handle the 404 error here
        http_response_code(404);
        echo "controller not found";
    }   
}