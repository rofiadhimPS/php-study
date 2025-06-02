<?php

namespace View;

use Helper\InputHelper;
use Service\TodolistService;

class TodolistView
{
    private TodolistService $todolistService;

    public function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    function showTodolist(): void
    {
        while (true) {
            $this->todolistService->showTodolist();

            echo "MENU" . PHP_EOL;
            echo "1. Add Todo" . PHP_EOL;
            echo "2. Remove Todo" . PHP_EOL;
            echo "x. Exit" . PHP_EOL;

            $choice = InputHelper::input("Choice");

            if($choice == "1"){
                $this->addTodolist();
            }else if ($choice == "2"){
                $this->removeTodolist();
            }else if ($choice == "x"){
                break;
            }else {
                echo "Choice not understood!" . PHP_EOL;
            }
    }

    echo "See you again" . PHP_EOL;
    }
    
    function addTodolist(): void
    {

    }

    function removeTodolist(): void
    {

    }
}