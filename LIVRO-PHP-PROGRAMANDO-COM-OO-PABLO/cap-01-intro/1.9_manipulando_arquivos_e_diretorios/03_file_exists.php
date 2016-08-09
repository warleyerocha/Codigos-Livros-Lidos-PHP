<?php

// verifica se um arquivo existe

$file = "files/file.txt";

if (file_exists($file)) {
    echo "Arquivo existe";
} else {
    echo "Não existe arquivos";
}
