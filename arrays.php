<?php

//Simple array of numbers
$numbers = [3, 6, 7, 14, 12];
var_dump($numbers);
echo '<br>';

//Simple array of strings
$names = ['Justine', 'Jynne', 'Patrice', 'Marco'];
var_dump($names);
echo '<br>';

//Outputting values of an array
echo $numbers[0];
echo '<br';

echo 4numbers[0] + $numbers[3];
echo '<br>';

//See contents of an array
var_dump($numbers);
echo '<br>';

print_r($names);
echo '<br>';

//ASSOCIATIVE ARRAYS

$groceryList = [
    1 => 'Beef',
    2 => 'Chicken',
    3 => 'Pork',
];

echo $groceryList[2];
echo '<br>';

//Strings as keys
$groceryList = [
    'Beef' => 'Meat Section',
    'Milk' => 'Dairy Section',
    'Bread' => 'Bakery Section',
];

echo $groceryList['Bread'];
echo '<br>';

var_dump($groceryList);
echo '<br>';

//Multi-dimensional arrays

$person = [
    'first_name' => 'Justine',
    'last_name' => 'Marco',
    'email' => 'justinejynnepatricemarco@student.laverdad.edu.ph',
];

$people = [
    $person1,
    [
        'first_name' => 'Jzmyn',
        'last_name' => 'Marco',
        "email" => 'jzmynphilippemarco@feunrmf.edu.ph'
    ],
    [
        'first_name' => 'Jezeeka',
        'last_name' => 'Villanueva',
        'email' => 'jezeekapaulettevillanueva@falcon.edu.ph'
    ],
    [
        'first_name' => 'Joseph',
        'last_name' => 'Villanueva',
        'email' => 'josephvillanueva@apecschools.edu.ph'
    ],
];

echo '<pre>';
var_dump($people);
echo '</pre>';

//Accessing valyes in multi-dimensional array
echo $people[2]['first_name'];
echo '<br>';

echo $people[0]['email'];
echo '<br>';

echo $people[1]['last_name'];
echo '<br>';

//Encode to JSON
echo '<pre>';
var_dump(json-encode($people));
echo '</pre>';

//Decode from JSON
$jsonobj = '{"first_name":"Justine","last_name":"Marco","email":"justinejynnepatricemarco@student.laverdad.edu.ph"}';
echo '<pre>';
var_dump(json_decode($jsonobj));
echo '</pre>';
?>