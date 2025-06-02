<?php

// mixed : array|bool|callable|int|float|object|resource|string

function testMixed(mixed $data): mixed
{
    if(is_array($data)){
        return ["test"];
    } else if (is_string($data)){
        return "Test";
    } else if (is_int($data)){
        return 100;
    } else {
        return true;
    }
}

var_dump(testMixed([]));
var_dump(testMixed("string"));
var_dump(testMixed(12));
var_dump(testMixed(true));
var_dump(testMixed([]));