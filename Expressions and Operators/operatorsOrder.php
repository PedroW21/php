<?php

$a = 3;
$b = 4;
$c = 5;

echo "$a + $b * $c =" . ' ' . $a + $b * $c; // 23 (not 35), because * has precedence over +

echo "<br>";

echo "Fixing the calculation order: " . (3 + 4) * 5; // 35

echo "<br>";

echo "$a + $b / $c = " . ' ' . $a + $b / $c; // 3.8 (not 3.2), because / has precedence over +

