<?php

echo "<h2>Interpolation</h2>";

$name = "Pitro";
$city = "Rome";
$age = 21;

# We should choose just one, to maintain the pattern
echo "Interpolation 1: My name is $name, I live in $city and I am $age years old";
echo "<br>";
echo "Interpolation 2: Mi name is {$name}, I live in {$city} and I am {$age} years old";

// need to use double quotes to work
echo "<h2>Scape Values</h2>";


$text = "There is a \n new line";
$tabText = "There is a \t tab";
$invertText = "There is a \r invert";
$backslashText = "There is a \\ backslash";
$doubleQuotesText = "There is a \" double quotes";
$valueText = "There is a \$ value";

echo $tabText;
echo "<br>";
echo $invertText;
echo "<br>";
echo $backslashText;
echo "<br>";
echo $doubleQuotesText;
echo "<br>";
echo $valueText;
echo "<br>";
// header("Content-Type: text/plain"); # to show the \n and tab
echo $text;


echo "<h2>Exercise</h2>";

function filterItems($items)
{
    $filteredItems = array_filter($items, function ($item) {
        ["name" => $name, "type" => $type,  "value" => $value] = $item;
        echo "$name | $type | $value <br>";

        if ($value > 10) {
            return true;
        }

        return false;
    });

    return $filteredItems;
}

$objects = [
    ["name" => "Car", "type" => "automobile", "value" => 12],
    ["name" => "Bike", "type" => "vehicle", "value" => 13],
    ["name" => "Airplane", "type" => "aircraft", "value" => 14],
    ["name" => "Boat", "type" => "watercraft", "value" => 7],
    [
        "name" => "Train", "type" => "rail vehicle", "value" => 8
    ]
];

$notCheapItem = filterItems($objects);

echo "<h3>Result</h3>";

foreach ($notCheapItem as $item) {
    ["name" => $name, "type" => $type, "value" => $value] = $item;

    echo "$name | $type | $value <br>";
}

echo "<h2>Exercise</h2>";

$phrase = "O Rato roeu a roupa do rei de Roma";

$qtdLetterA = substr_count($phrase, "a");

printf("The phrase has %d letter A (substring_count)", $qtdLetterA);


$justFirstUpper =  ucfirst("hello world");

echo "<br>";

echo "used ucfirst function: $justFirstUpper";

echo "<br>";

echo "using function to that phrase: " . " 'Este item está em PROMOÇÃO' ";
echo "<br>";

echo mb_strtolower("Este item está em PROMOÇÃO");

echo "<br>";

echo "<h2>Strip tags</h2>";

$phrase = "<h1>PHP</h1> <p>is <strong>awesome</strong></p>";

echo strip_tags($phrase);

echo "<br>";

echo "<h2>Url</h2>";

$url = "https://www.tbkbanks.com.br/comprovantepix/AWE24-CHGE1-PQW3O?id=3&date=2023-10-31";

echo "<pre>";
print_r(parse_url($url));
echo "</pre>";
