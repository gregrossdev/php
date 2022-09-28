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

/*
---
Arrays
-------- */
$numbers = [1, 2, 3, 4, 5];
$names = ['greg', 'bill', 'jimmy'];

var_dump($numbers);
var_dump($names);

// associative arrays
$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
];

echo $colors['1'] . "\n";
var_dump($colors);

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

echo $hex['red'] . "\n";
var_dump($hex);

// multi-dimensional arrays
$person1 = [
    'first_name' => 'Greg',
    'last_name' => 'Ross',
    'email' => 'g@g.com',
];

$people = [
    $person1, //   [...$person1]
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com',
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com',
    ],
];

var_dump($people);
echo $people[0]['first_name'] . "\n";
echo $people[2]['email'] . "\n";

// Encode to JSON
var_dump(json_encode($people));

// Decode from JSON
$jsonobj = '{"first_name":"Greg","last_name": "Ross","email":"g@g.com"}';
var_dump(json_decode($jsonobj));

/*
---
Loops
-------- */
// for
for ($i = 0; $i < 10; $i++) {
    echo $i."\n";
}

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . "\n";
}

// foreach associative array
$person = [
    'name' => 'Greg',
    'surname' => 'Ross',
    'age' => 35,
    'hobbies' => ['Meditation', 'Reading'],
];
foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    }
    echo $key . ' ' . $value . "\n";
}