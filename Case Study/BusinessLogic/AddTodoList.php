<?php

/**
 * add todo in list
 */
function addTodoList(string $todo)
{
    global $todoList;
    $number = sizeof($todoList)+1;
    
    $todoList[$number] = $todo;
}