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

// testAddTodolist();

function testRemoveTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);

    echo $todolistService->removeTodolist(5) . PHP_EOL; // Should fail, as 5 does not exist
    echo $todolistService->removeTodolist(4) . PHP_EOL; // Should fail, as 4 does not exist
    echo $todolistService->removeTodolist(1) . PHP_EOL; // Should succeed
    echo $todolistService->removeTodolist(2) . PHP_EOL; // Should succeed
    echo $todolistService->removeTodolist(3) . PHP_EOL; // Should succeed   
}

testRemoveTodolist();