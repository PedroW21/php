<?php

$size = random_int(1, 10);
$numbers = [];

for ($i = 0; $i < $size; $i++) {
    array_push($numbers, random_int(1, 100));
}

echo "<p>The random array is:</p>";

echo "<pre>";
print_r($numbers);
echo "</pre>";

echo "<p>The sum of all elements in array is:</p>";
$sum = 0;

foreach ($numbers as $number) {
    $sum += $number;
}

echo "<p>$sum</p>";

if ($sum >= 100) {
    echo "<p>The sum is greater than or equal to 100</p>";
} else {
    echo "<p>The sum is less than 100</p>";
}

$numbers2 = array_merge([], $numbers);

if ($numbers === $numbers2) {
    echo "<p>The arrays are equal</p>";
} else {
    echo "<p>The arrays are not equal</p>";
}

