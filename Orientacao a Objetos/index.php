<?php

include_once 'classStructure.php';

$me = new Programmer();
$randomUser = new User("User", 21, 123);
$randomUser2 = new User("Mike", 15, 456);

$randomUser -> saySmth();
echo "<br>";
echo $randomUser::getCounter() . "<br>";

echo 'My documentId is: ' . $randomUser2 -> getDocumentId();