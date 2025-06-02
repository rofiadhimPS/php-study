<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Service/ToodlistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = "PHP";
    $todolistRepository->todolist[2] = "PHP OOP";
    $todolistRepository->todolist[3] = "PHP Database";
    
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

testShowTodolist();