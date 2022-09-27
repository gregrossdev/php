<?php

// comment
/*
    comments
*/

/*
-----
PHP Data Types
----------------
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// variable declaration
$firstName = "Greg";
$age = 35;
$isFunny = false;
$netWorth = 25.45;
$value = null;

var_dump($firstName, $age, $isFunny, $netWorth, $value);

// concatenation
echo gettype($firstName) . " " .  $firstName . "\n";
echo gettype($age) . " " .  $age . "\n";
echo gettype($isFunny) . " " .  $isFunny . "\n";
echo gettype($netWorth) . " " .  $netWorth . "\n";
echo gettype($value) . " " .  $value . "\n";

echo "First name is ${firstName}" . "\n";

// number operations
$a = 8;
$b = 9;
$c = 2.2;

echo ($a + $b) * $c . "\n";
echo $a - $b . "\n";
echo $a * $b . "\n";
echo $a / $b . "\n";
echo $a % $b . "\n";