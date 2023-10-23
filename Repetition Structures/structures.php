<?php

echo "<h2>While</h2>";

$size = random_int(1, 10);

while ($size > 0) {
    echo "<p>While: $size</p>";
    $size--;
};

echo "<h2>Do While</h2>";

$size = random_int(1, 10);

do {
    echo "<p>Do/while: $size</p>";
    $size--;
} while ($size > 0);

echo "<h2>For</h2>";

for ($i = 0; $i < 10; $i++) {
    echo "<p>For: $i</p>";
}
