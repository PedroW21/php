<h1>Instrução de uma linha</h1>
<div>
    <?php
    echo "Single line instruction";
    ?>
</div>

<h1>Instrução com multiplas linhas</h1>
<div>
    <?php
    if (random_int(0, 10) <= 5) {
        echo "First line";
        echo "<br>";
    } else {
        echo "Second line";
        echo "<br>";
    }
    ?>

    
</div>