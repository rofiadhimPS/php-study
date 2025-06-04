<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("PHP");
    $todolistRepository->todolist[2] = new Todolist("PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("PHP Database");
    
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

// testShowTodolist();

function testAddTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("PHP");
    $todolistService->addTodolist("PHP OOP");
    $todolistService->addTodolist("PHP Database");

    // $todolistService->showTodolist();

}

testAddTodolist();

function testRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("PHP");
    $todolistService->addTodolist("PHP OOP");
    $todolistService->addTodolist("PHP Database");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

}

// testRemoveTodolist();