<?php

$score = "A";

switch($score){
    case "A":
        echo "Your passed very well" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Your passed" . PHP_EOL;
        break;
    case "D":
        echo "Your didn't passed" . PHP_EOL;
    default:
        echo "Maybe you wrong subject study" . PHP_EOL;
}

// Alternative Syntax
switch($score):
    case "A":
        echo "Your passed very well" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Your passed" . PHP_EOL;
        break;
    case "D":
        echo "Your didn't passed" . PHP_EOL;
    default:
        echo "Maybe you wrong subject study" . PHP_EOL;
endswitch;
