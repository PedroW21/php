<?php

include_once "backend.php";

// <?php
//     foreach ($products as $product) {
//         echo "<li>$product</li>";
//     }
//     ?;>
// one form of doing it

?>

<h1>Welcome to this fictional website!</h1>
<p> <?= $name; ?> See our offers!</p>

<!-- Another wau of doing it -->
<ul>
    <?php foreach ($products as $product) : ?>
        <li><?= $product; ?></li>
    <?php endforeach; ?>
</ul>