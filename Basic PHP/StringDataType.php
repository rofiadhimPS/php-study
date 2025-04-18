<?php

//Single Quote
echo 'Name : ';
echo 'Muh Rofiadhim Rajab';
echo "\n"; 

//Double Quote
echo "Name : ";
echo "Muh\t Rofiadhim\t Rajab\n";

//Multiline String

//Heredoc
echo <<<TEXT
Welcome to study php
Now, we learn string data type
This is the third way to create string
Can use Heredoc 

TEXT;


//Nowdoc
echo <<<'TEXT'
Welcome to study php
Now, we learn string data type
This is the four way to create string
Can use Nowdoc 
TEXT;
