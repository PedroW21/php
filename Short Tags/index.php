<?php

echo "Normal PHP code";

?>

<!-- Não recomendado pela comunidade por problemas com XML, problemas com servidor e etc... -->
<? echo "using short tags"; ?>

<?php

echo "Showing simple content (not short tag)";
?>

<?= "<p>Testing short sintax</p>"; ?>

<?php

include_once "simpleForm.php";