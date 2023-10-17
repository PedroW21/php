<h1>Describing a person</h1>

<?php

$persons = [["name", "Pietro"], ["name", "Marie"]];


foreach ($persons as $person) {
    echo "<div>";
    echo "<h2>Person</h2>";
    echo "<p>Name: $person[1]</p>";
    echo "</div>";
}


?>