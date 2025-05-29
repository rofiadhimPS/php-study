<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b1111111);

echo "Underscore in number : ";
var_dump(1_123_123_123);

// Floating Number

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point with Plus E Notation (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point with Minus E Notation (1.2 x 0.001) : ";
var_dump(1.2e-3);

echo "Floating Point with underscore : ";
var_dump(1_123.123);

// Integer Overflow

echo "Integer Overflow : ";
var_dump(9223372036854775807);