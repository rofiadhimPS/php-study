<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

$todoList[1] = "Book";
$todoList[2] = "Cat";

showTodoList();

echo "TEST SUCCESS" . PHP_EOL;