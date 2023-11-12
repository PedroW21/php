<?php

$persons = [
    [
        "name" => "John",
        "age" => 25,
        "points" => 10
    ],
    [
        "name" => "Linda",
        "age" => 22,
        "points" => 9
    ],
    [
        "name" => "Sam",
        "age" => 21,
        "points" => 8
    ],
];

// way number 1;

//<?php
// foreach ($persons as $person) {
//     echo "<tr>";
//     echo "<td>" . $person["name"] . "</td>";
//     echo "<td>" . $person["age"] . "</td>";
//     echo "</tr>";
// }
//
$orderedPersons = [...$persons];
asort($orderedPersons);

?>


<h1>Table With Data</h1>

<table border=1>
    <thead>
        <tr>
            <th> Name </th>
            <th> Age </th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($persons as $person) : ?>
            <!-- Way number 2 -->
            <tr>
                <td> <?= $person["name"] ?> </td>
                <td> <?= $person["age"] ?> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<h1>Ranking</h1>

<ol>
    <?php foreach ($orderedPersons as $person) : ?>
        <li> <?= $person["name"] ?> - <?= $person["points"] ?></li>
    <?php endforeach; ?>
</ol>