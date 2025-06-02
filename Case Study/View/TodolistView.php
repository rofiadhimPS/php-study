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
        echo "ADD TODO" . PHP_EOL;

        $todo = InputHelper::input("Todo (x for cancel)");

        if ($todo == "x") {
            echo "Cancel adding todo" . PHP_EOL;
        } else {
            $this->todolistService->addTodolist($todo);
        }
    }

    function removeTodolist(): void
    {
        echo "REMOVE TODO" . PHP_EOL;

        $choice = InputHelper::input("Number (x for cancel)");

        if($choice == "x"){
            echo "Cancel remove todo" . PHP_EOL;
        }else {
            $this->todolistService->removeTodolist($choice);
        }
    }
}