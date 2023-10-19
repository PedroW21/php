<?php

$x = "Hello world!";
$helloWorld = &$x;

echo $x . "\n";
echo "<br>";
echo $helloWorld . "\n";

$x = "Goodbye world!";

echo "<h1>Changed reference variable</h1>";
echo "<br>";
echo $x . "\n";
echo "<br>";
echo $helloWorld . "\n";
