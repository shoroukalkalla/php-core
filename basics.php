<?php

echo "Hello World from PHP";
echo '<br/>';

//**************************************************//

$age = 25;
$pi = 3.14;
$name = "shorouk";
$is_admin = false;
$phone = null;

echo 'hello ' . $name . ' your age is ' . $age;
echo '<br/>';
echo "hello $name";
echo '<br/>';

//**************************************************//

//Functions:
//----------

// gettype() 
echo gettype($phone);
echo '<br/>';

//////////////////////////////////

// is_numeric(), is_integer(), is_float()
$num1 = 13;
$num2 = 13.5;
$num3 = '13';
$num4 = (int) $num3; //casting

echo gettype($num4);
echo '<br/>';
//////////////////////////////////

echo is_integer($num1) . 'num1 <br/>';
echo is_integer($num2) . 'num2 <br/>';
echo is_integer($num3) . 'num3 <br/>';

//////////////////////////////////

// strlen($str), str_word_count()
echo strlen($name);
echo '<br/>';

//////////////////////////////////

// 3 == '3'  --> TRUE
// 3 === '3' --> FALSE

if (gettype($name) !== 'string') {
    echo 'name must be string';
} else if (strlen($name) > 20) {
    echo 'name must be less than or equal 20 char';
} else {
    echo "hello $name";
}
echo '<br/>';

//**************************************************//

$lastName = "Alkalla";

echo ($lastName ?? 'No Name');

echo '<br/>';

//////////////////////////////////

for ($i = 1; $i <= 3; $i++) {
    // if ($i == 2) break;
    if ($i == 2) continue;
    echo $i . '<br/>';
}
echo '<br/>';

//////////////////////////////////

$i = 1;
while ($i <= 3) {
    echo $i . '<br/>';
    $i++;
}
echo '<br/>';

//////////////////////////////////

$stop = 10;
for ($i = 1; $i <= $stop; $i++) {
    if ($i % 2 == 1)
        echo $i  . '<br/>';
}

//**************************************************//

$users = ['shorouk', 'fatma', 'hager', 'mariam'];

echo '<pre>';
var_dump($users);
echo '</pre>';

//////////////////////////////////

for ($i = 0; $i < count($users); $i++) {
    echo $users[$i] . '<br/>';
}
echo '<br/>';

//////////////////////////////////

for ($i = count($users) - 1; $i >= 0; $i--) {
    echo $users[$i] . '<br/>';
}
echo '<br/>';

//////////////////////////////////

foreach ($users as $user) {
    echo $user . '<br/>';
}
echo '<br/>';

//////////////////////////////////

foreach (array_reverse($users) as $user) {
    echo $user . '<br/>';
}
echo '<br/>';

//////////////////////////////////

$data = [
    'name' => 'shorouk',
    'age' => 25,
    'spec' => 'back-end',
];

echo '<pre>';
var_dump($data);
echo '</pre>';
echo '<br/>';

//////////////////////////////////
echo $data['age'];
echo '<br/>';
//////////////////////////////////

foreach ($data as $key => $value) {
    // echo $value . '<br/>';
    echo "$key is $value <br/>";
}
echo '<br/>';

//////////////////////////////////

$arr = [
    [
        'name' => 'shorouk',
        'age' => 25,
        'spec' => 'back-end',
    ],
    [
        'name' => 'mostafa',
        'age' => 27,
        'spec' => 'mobile',
    ],
    [
        'name' => 'shehata',
        'age' => 22,
        'spec' => 'front-end',
    ],
];

//outer array:
foreach ($arr as $ar) {
    //inner array:
    echo "<div style='padding: 20px'>";
    foreach ($ar as $key => $val) {
        echo "$key: $val <br/>";
    }
    echo "</div>";
}

//////////////////////////////////
