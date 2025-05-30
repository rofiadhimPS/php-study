<?php

$nilai = "A";

switch ($nilai){
    case "A":
        echo "You Passed Very Well!" . PHP_EOL;
        break;
    case "B":
    case "C":   
        echo "You Passed!" . PHP_EOL;
        break;
    case "D";
        echo "You Failed!" . PHP_EOL;
        break;
    default:
        echo "Maybe you are in the wrong major" . PHP_EOL;
}

// Alternative Syntax
switch ($nilai):
    case "A":
        echo "You Passed Very Well!" . PHP_EOL;
        break;
    case "B":
    case "C":   
        echo "You Passed!" . PHP_EOL;
        break;
    case "D";
        echo "You Failed!" . PHP_EOL;
        break;
    default:
        echo "Maybe you are in the wrong major" . PHP_EOL;
endswitch;