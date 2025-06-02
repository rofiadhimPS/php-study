<?php

function sayHello(?string $name)
{
    if($name == null){
        throw new Exception("Not Allowed Null");
    }

    echo "Hello $name" . PHP_EOL;
}

function sayHelloExpression(?string $name)
{
    $result = $name != null ? "Hello $name" : throw new Exception("Not Allowed Null");
    echo $result . PHP_EOL;
}

sayHelloExpression("null");
sayHelloExpression(null);

