<?php

// with single quote
echo 'Name : ';
echo 'Muh Rofiadhim Rajab';
echo "\n";

// with double quote
echo "Name : ";
echo "Muh\t Rofiadhim\t Rajab \n";

// Multiline String
// heredoc

echo <<<ADHIM
this is long string example
happy learn fundamental php
this is the string in php
ADHIM;

// nowdoc
echo <<<'ADHIM'
this is long string example
happy learn fundamental php
this is the string in php
ADHIM;