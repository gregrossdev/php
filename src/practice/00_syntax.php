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
echo gettype($firstName) . " 00_syntax.php" .  $firstName . "\n";
echo gettype($age) . " 00_syntax.php" .  $age . "\n";
echo gettype($isFunny) . " 00_syntax.php" .  $isFunny . "\n";
echo gettype($netWorth) . " 00_syntax.php" .  $netWorth . "\n";
echo gettype($value) . " 00_syntax.php" .  $value . "\n";

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

/*
---
Functions
------------ */
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4,5) . "\n";
echo sum(9,10) . "\n";

// spread operator
function sumAll(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) $sum += $num;
    return $sum;
}
echo sumAll(1, 2, 3, 4, 6) . "\n";
echo sumAll(2, 4, 5, 4, 6) . "\n";

// arrow
function sumArrow(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sumArrow(1, 2, 3, 4, 6) . "\n";

/*
---
Conditionals
--------------- */
$age = 20;
$salary = 300000;

if ($age > 20) {
    echo "1" . "\n";
} else {
    echo "2" . "\n";
}

// if AND
if ($age > 20 && $salary === 300000) {
    echo "AND" . "\n";
}
// if OR
if ($age > 20 OR $salary === 300000) {
    echo "OR" . "\n";
}

// ternary if
echo $age < 22 ? 'Young'. "\n" : 'Old' . "\n";
echo "Ternary" . "\n";

// switch
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything'. "\n";
        break;
    case 'editor';
        echo 'You can edit content'. "\n";
        break;
    case 'user':
        echo 'You can view posts and comment'. "\n";
        break;
    default:
        echo 'Unknown role' . "\n";
}

/*
---
Object Oriented Programming
-------------------------------- */
class User {

    private string $name;
    public string $email;
    public string $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


    public function login(): string
    {
        return "User $this->name is logged in.";
    }

}

$user1 = new User('greg', 'greg@gmail.com', '123456');
echo $user1->getName()."\n";
echo $user1->login()."\n";

var_dump($user1);

class Admin extends User {
    private string $title;

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title; 
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

}

$employee1 = new Admin('John','johndoe@gmail.com','123456','Manager');
echo $employee1->getTitle();