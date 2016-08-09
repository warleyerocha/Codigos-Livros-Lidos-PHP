<?php
// verifica se é um arquivo

$file = "files/file.txt";

if (is_file($file)) {
    echo "É um arquivo";
} else {
    echo "Não é arquivo";
}
