<?php

$name = "Pedro";

?>

<form action="">

    <div>
        <label for="name">Nome:</label>
        <input 
        type="text" 
        name="name" 
        id="name" 
        value="<?= $name; ?>"
        >
    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>

</form>