<?php
//associative array
$car = [
    'brand' => 'Fiat',
    'model' => 'Uno',
    'color' => 'red',
    'year' => '2000'
];

echo "<pre>";
print_r($car);
echo "</pre>";
?>

<h1>Car</h1>
<p>Brand: <?= $car['brand'] ?></p>
<p>Model: <?= $car['model'] ?></p>
<p>Color: <?= $car['color'] ?></p>
<p>Year: <?= $car['year'] ?></p>