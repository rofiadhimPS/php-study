<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Muh");
addTodoList("Rofiadhim");
addTodoList("Rajab");
addTodoList("Ryu");
addTodoList("Tatsuya");

showTodoList();

viewRemoveTodoList();

showTodoList();