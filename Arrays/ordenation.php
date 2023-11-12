<?php

    $arr = [
        "Pietro" => 21,
        "Maria" => 19,
        "João" => 20,
        "José" => 22
    ];

    // grow order (maintain the keys)
    asort($arr);

    print_r($arr);
    echo "<br>";

    $arr = [
        "Pietro" => 21,
        "Maria" => 19,
        "João" => 20,
        "José" => 22
    ];

    // decrease order
    arsort($arr);

    print_r($arr);
    echo "<br>";

    //alphabetical order
    ksort($arr);
    print_r($arr);

    echo "<br>";

    // reverse alphabetical order
    krsort($arr);
    print_r($arr);
