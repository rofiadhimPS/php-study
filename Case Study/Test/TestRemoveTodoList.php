<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Muh");
addTodoList("Rofiadhim");
addTodoList("Rajab");
addTodoList("Ryu");
addTodoList("Tatsuya");

showTodoList();

removeTodoList(3);
showTodoList();

$success = removeTodoList(5);
var_dump($success);

showTodoList();
