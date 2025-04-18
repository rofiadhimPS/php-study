<?php

echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);

echo "Underscore in Number : ";
var_dump(1_234_567);

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point with E Notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point with E Notation Minus (7 x 0.001) : ";
var_dump(7e-3);

echo "Underscore in Floating Point : ";
var_dump(1_234.567);

// Integer Overflow
echo "Integer Overflow : ";
var_dump(9_223_372_036_854_775_808);