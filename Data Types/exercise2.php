<?php

echo "<h1>Exercicie 2</h1>";

$person = [
    "name" => "Pietro",
    "age" => 17,
    "nationality" => "Brazilian"
];

foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}

$person2 = [
    "name" => "Jong Parker",
    "age" => random_int(15, 26),
    "nationality" => "American"
];

echo "<h2>Conditions Person 1</h2>";

if ($person["age"] >= 18) {
    echo  $person["name"] . " " . "you are allowed to enter the party";
} else {
    echo $person["name"] . " " . "you are not allowed to enter the party";
}

echo "<h2>Conditions Person 2</h2>";

switch (true) {
    case $person2["age"] < 18:
        echo $person2["name"] . " " . "you are not allowed to enter the party,  because you have" . " " . $person2["age"] . " " . "years old";
        break;
    case $person2["age"] >= 18 && $person2["nationality"] !== "American":
        echo $person2["name"] . " " . "you are allowed to enter the party, because you have" . " " . $person2["age"] . " " . "years old";
        break;
    case $person2["age"] >= 18 && $person2["age"] <= 20 && $person2["nationality"] === "American":
        echo $person2["name"] . " " . "by the laws of United States of America, you are not allowed to enter the party, because the legal age is 21, and you have" . " " . $person2["age"];
        break;
    case $person2["age"] >= 21 && $person2["nationality"] === "American":
        echo $person2["name"] . " " . "you are allowed to enter the party, because you have" . " " . $person2["age"];
        break;
}
