<?php

function sayHello()
{
    echo 'Hello World';
}

sayHello();
echo '<br/>';

//////////////////////////////////////////

function greetPerson($name)
{
    echo "Hello $name";
}

greetPerson('Shorouk');
echo '<br/>';

//////////////////////////////////////////

function addNums($x, $y)
{
    $sum = $x + $y;
    return $sum;
}

$res = addNums(3, 4);
echo $res . '<br/>';

//////////////////////////////////////////

//calc
function calc($x, $y, $op)
{
    switch ($op) {
        case 'add':
            return $x + $y;
            break;
        case 'sub':
            return $x - $y;
            break;
        case 'mul':
            return $x * $y;
            break;
        case 'div':
            return $x / $y;
            break;
        default:
            return 'please enter a valid operation';
    }
}

echo calc(5, 5, 'add') . '<br/>';

//////////////////////////////////////////

//anonymous function:
function () {
    echo 'hiiiiiiii';
};

//////////////////////////////////////////

//callbacks:
$nums = [1, 2, 3, 4];

$new_nums = array_map(function ($x) {
    return $x * 2;
}, $nums);

echo '<pre>';

var_dump($new_nums);

echo '</pre>';

//////////////////////////////////////////

//dynamic function calls:

$sayHello = function () {
    echo 'hello <br/>';
};

$sayHello();

//////////////////////////////////////////

$add = function ($x, $y) {
    return $x + $y;
};

$sub = function ($x, $y) {
    return $x - $y;
};

$mul = function ($x, $y) {
    return $x * $y;
};

$div = function ($x, $y) {
    return $x / $y;
};

function calc2($x, $y, $op)
{
    return $op($x, $y);
}

echo calc2(5, 5, $add);
