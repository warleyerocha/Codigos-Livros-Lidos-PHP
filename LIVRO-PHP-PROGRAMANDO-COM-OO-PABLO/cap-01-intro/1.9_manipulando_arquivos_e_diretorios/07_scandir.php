<?php

// lê o conteúdo de um diretório (arquivos e diretórios), retornando o como array

$folder = "files/";

if (is_dir($folder)) {
    $lines = scandir($folder);
    foreach ($lines as $line) {
        print $line . '<br>' . PHP_EOL;
    }
}
