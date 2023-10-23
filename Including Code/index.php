<?php

include_once 'example.php'; //gera warning, e inclui somente uma vez

echo "From example.php: $var";

require "fatalError.php"; //gera warning + fatal error e não executa o resto do código

require "files/fileInFileFolder.php";