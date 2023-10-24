<?php

echo "<h2>Implode Function</h2>";

$arr = ['Bom', 'Dia', '!'];

$implodedArr = implode(' ', $arr);

echo $implodedArr;

echo "<h2>Auxiliary Functions</h2>";

function random($value1, $value2, $defValue = "Hi!")
{
    // ...code...

    echo "<pre>";
    print_r(func_get_args()); // Returns an array with all arguments

    echo "<br>";

    print_r(func_num_args()); // Returns the number of arguments

    echo "</pre>";
}

random(1, 2);

echo "<h2>Returning Multiple Values</h2>";

function person($year, $name, $fatherName)
{

    $age = date('Y') - $year;

    return ["age" => $age, "name" => $name, "fatherName" => $fatherName];
}

$personData = person(1996, 'Lucas', 'Rafael');

echo "<pre>";

print_r($personData);

echo "</pre>";

echo "<h2>Debugging Values</h2>";

# print_r
# var_dump // human readable

$arr = [
    "Test",
    123,
    123.321,
    true,
    [1,2,3],
    "name" => "Lucas",
];

echo "<pre>";
echo "<p>var_dump</p>";

var_dump($arr);

echo "<br>";

echo "<p>print_R</p>";

print_r($arr);
echo "</pre>";
$test = 1;
echo strval($test);
