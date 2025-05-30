<?php

require_once "../Helper/Input.php";
require_once "../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "REMOVE TODO" . PHP_EOL;

    $choice = input("Number (x for cancel)");

    if($choice == "x"){
        echo "Cancel remove todo" . PHP_EOL;
    }else {
        $success = removeTodoList($choice);
    
        if($success) {
            echo "Success delete todo selected number" . PHP_EOL;
        } else {
            echo "Failed to delete selected todo number" . PHP_EOL;
        }
    }
}