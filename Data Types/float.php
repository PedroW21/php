<?php

$float = 1.231;

echo "is a float number: $float";
echo "<br>";

$randomFloat = random_int(0, 100) * 0.1;

echo "is a random float number: $randomFloat";
echo "<br>";

if ($randomFloat <= 5) {
    echo "$randomFloat is less than 5";
    echo "<br>";
} else {
    echo "$randomFloat is greater than 5";
    echo "<br>";
}

echo "rounding a float number: " . round($randomFloat);
echo "<br>";