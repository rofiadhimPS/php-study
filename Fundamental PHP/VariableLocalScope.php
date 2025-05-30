<?php

function createName()
{
    $name = "Adhim"; // local scope
}

createName();
echo $name . PHP_EOL;