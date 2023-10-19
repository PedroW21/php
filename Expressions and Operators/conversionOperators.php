<?php

$floatNumber = "1.341";

// Convert the string to a float, but don't force it
$floatNumber = (float)$floatNumber;

echo "Float number: " . $floatNumber . "<br>";
echo "Number Type: " . gettype($floatNumber) . "<br>";

echo "<h2>Testing casts</h2>";

$intNumber = 5;
$string = "teste";
$bool = true;
$arr = [1,2,3];

echo "Int to String: " . (string)$intNumber . "<br>";
echo "String to Int: " . (int)$string . "<br>";
echo "Bool to Int: " . (int)$bool . "<br>";
#echo "Array to String: " . (string)$arr . "<br>"; not permitted
echo "Array to Int: " . (int)$arr . "<br>";
