<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("PHP");
    $todolistService->addTodolist("PHP OOP");
    $todolistService->addTodolist("PHP 8");
    $todolistService->addTodolist("PHP Database");
    $todolistService->addTodolist("PHP Web");

    $todolistView->showTodolist();
    
}

// testViewShowTodolist();

function testViewAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("PHP");
    $todolistService->addTodolist("PHP OOP");
    $todolistService->addTodolist("PHP 8");
    $todolistService->addTodolist("PHP Database");
    $todolistService->addTodolist("PHP Web");

    $todolistService->showTodolist();

    $todolistView->addTodolist();
    
    $todolistService->showTodolist();

    $todolistView->addTodolist();

    $todolistService->showTodolist();

    $todolistView->addTodolist();
    
}

// testViewAddTodolist();


function testViewRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("PHP");
    $todolistService->addTodolist("PHP OOP");
    $todolistService->addTodolist("PHP 8");
    $todolistService->addTodolist("PHP Database");
    $todolistService->addTodolist("PHP Web");

    $todolistService->showTodolist();

    $todolistView->removeTodolist();

    $todolistService->showTodolist();

    $todolistView->removeTodolist();

    $todolistService->showTodolist();

}

testViewRemoveTodolist();