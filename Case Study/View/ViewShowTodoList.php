<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Remove Todo" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        $choice = input("Choice");

        if($choice == "1"){
            viewAddTodoList();
        }else if ($choice == "2"){
            viewRemoveTodoList();
        }else if ($choice == "x"){
            break;
        }else {
            echo "Choice not understood!" . PHP_EOL;
        }
    }

    echo "See you again" . PHP_EOL;
}