<?php

$int = 1;
$int2 = 2;

echo  "$int + $int2= " . $int + $int2;
echo "<br>";
echo "$int - $int2= " .  $int2 - $int;
echo "<br>";

echo "is a integer: " . is_int($int);
echo "<br>";

$randomInt = random_int(1, 10);

if ($randomInt % 2 == 0) {
    echo "$randomInt is even";
} else {
    echo "$randomInt is odd";
}

