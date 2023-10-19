<?php

echo "<h2>Local Scope</h2>";

$x = 10; // global scope
echo "<p>Variable x outside function is: $x</p>";

function myTest()
{
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}

myTest();

echo "<h2>Global Scope</h2>";

function invokeFromGlobal()
{
    global $x;
    echo "<p>Variable x (global) inside function is: $x</p>";
    $x = 15;
    echo "<p>Variable x (global), after change inside function is: $x</p>";
}

invokeFromGlobal();

$test = "b";
echo "<p>Variable test outside and before if is: $test</p>";
if (true) {
    $test = "a";
    echo "<p>Variable test inside if is: $test</p>";
}

echo "<p>Variable test outside and after if is: $test</p>";
echo "<h2>Static Scope</h2>";

function staticScope()
{
    static $invokedTimes = 0;
    $invokedTimes++;

    echo "<p>Variable invokedTimes is: $invokedTimes</p>";
}

staticScope();
staticScope();
staticScope();

echo "<h2>Parameter Scope</h2>";

function parameterScope($parameter)
{
    echo "<p>Variable parameter is: $parameter</p>";
}

parameterScope("Hello World!");

function sum($a, $b)
{
    $c = $a + $b;
    echo "<p>Variable c is: $c</p>";
}

sum(1, 2);
sum(2, 4);