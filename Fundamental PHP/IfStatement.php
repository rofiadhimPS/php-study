<?php

$value = 70;
$absen = 90;

if ($value >= 75 && $absen >= 75){
    echo "Congratulions, You Passed!" . PHP_EOL;
} else {
    echo "Sorry, you failed!" . PHP_EOL;
}

echo "\n \n \n";
$value = 70;
$absen = 90;

if ($value >= 80 && $absen >= 80){
    echo "Your grade is A" . PHP_EOL;
} else if ($value >= 70 && $absen >= 70){
    echo "Your grade is B" . PHP_EOL;
} else if ($value >= 60 && $absen >= 60){
    echo "Your grade is C" . PHP_EOL;
} else if ($value >= 50 && $absen >= 50){
    echo "Your grade is D" . PHP_EOL;
} else {
    echo "Your grade is E"  . PHP_EOL;
}

// Alternative Syntax
if ($value >= 80 && $absen >= 80):
    echo "Your grade is A" . PHP_EOL;
 elseif ($value >= 70 && $absen >= 70):
    echo "Your grade is B" . PHP_EOL;
 elseif ($value >= 60 && $absen >= 60):
    echo "Your grade is C" . PHP_EOL;
 elseif ($value >= 50 && $absen >= 50):
    echo "Your grade is D" . PHP_EOL;
 else :
    echo "Your grade is E"  . PHP_EOL;
endif;