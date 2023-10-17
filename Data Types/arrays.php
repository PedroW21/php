<?php

echo "Array type";
echo "<br>";

$arr = ['a', 'b', 'c'];

print_r($arr);

echo "<h1>Associative Array</h1>";

$arr_assoc = [
    'name' => 'Pietro',
    'age' => '21',
    'gender' => 'man',
    'favoriteFood' => [
        'pizza',
        'pasta',
        'sushi'
    ]
];

print_r($arr_assoc);
