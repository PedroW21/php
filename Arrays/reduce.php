<h1>Reduce</h1>

<?php

    $arr = [1,2,3,4,5];

    function sum($a, $b) {
        return $a + $b;
    };

    // we can invoke a funciton like this??
    $result = array_reduce($arr, "sum");

    echo $result;
?>