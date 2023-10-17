<?php

echo "Text type";
echo "<br>";

$text = "Hello World";
$ageWithDifferentTypes = ["12", 12];
$age = $ageWithDifferentTypes[random_int(0, 1)];

echo "Randomizing a word: " . str_shuffle($text);
echo "<br>";

echo 'variables do not work on simple quotes: $text';
echo "<br>";

if (is_string($age)) {
    echo "Age is a string";
    echo "<br>";
} else {
    echo "Age is not a string";
    echo "<br>";
}
