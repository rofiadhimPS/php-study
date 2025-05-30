<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../Helper/Input.php";

function viewAddTodoList()
{
    echo "ADD TODO" . PHP_EOL;

    $todo = input("Todo (x for cancel)");

    if ($todo == "x") {
        echo "Cancel adding todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }

}

