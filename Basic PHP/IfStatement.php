<?php

$score =  70;
$presence = 90;

if ($score >= 80 && $presence >= 80){
    echo "Your Score A" . PHP_EOL;
} else if ($score >= 70 && $presence >= 70){
    echo "Your Score B" . PHP_EOL;
} else if ($score >= 60 && $presence >= 60) {
    echo "Your Score C" . PHP_EOL;
} else if ($score >= 50 && $presence >= 50) {
    echo "Your Score D" . PHP_EOL;
} else  {
    echo "Your Score E" . PHP_EOL;
}

// Alternative Syntax
if ($score >= 80 && $presence >= 80):
    echo "Your Score A" . PHP_EOL;
 elseif ($score >= 70 && $presence >= 70):
    echo "Your Score B" . PHP_EOL;
 elseif ($score >= 60 && $presence >= 60): 
    echo "Your Score C" . PHP_EOL;
 elseif ($score >= 50 && $presence >= 50): 
    echo "Your Score D" . PHP_EOL;
 else :
    echo "Your Score E" . PHP_EOL;
 endif;