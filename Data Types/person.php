<?php

class Person
{
    function say()
    {
        echo "Hello!";
    }
}

$pietro = new Person();


$pietro->nome = "Pietro";

echo "Your name is " . $pietro->nome;
echo "<br>";
echo $pietro->say();