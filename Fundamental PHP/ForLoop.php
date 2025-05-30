<?php

for ($counter = 1; $counter <= 10; $counter++){
    if ($counter == 1) {
        echo "This is the {$counter}st for loop" . PHP_EOL;
    } else if($counter == 2) {
        echo "This is the {$counter}nd for loop" . PHP_EOL;
    } else if ($counter == 2) {
        echo "This is the {$counter}nd for loop" . PHP_EOL;
    } else {
        echo "This is the {$counter}th for loop" . PHP_EOL;
    }
}

// Alternative Syntax
for ($counter = 10; $counter >= 1; $counter--):
    if ($counter == 1) {
        echo "This is the {$counter}st for loop" . PHP_EOL;
    } else if($counter == 2) {
        echo "This is the {$counter}nd for loop" . PHP_EOL;
    } else if ($counter == 2) {
        echo "This is the {$counter}nd for loop" . PHP_EOL;
    } else {
        echo "This is the {$counter}th for loop" . PHP_EOL;
    }
endfor;