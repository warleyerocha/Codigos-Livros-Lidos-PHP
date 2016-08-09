<?php

// apaga o arquivo passado por parâmetro

$file = "files/unlink.txt";

if (unlink($file)) {
    echo "Arquivo apagado";
} else {
    echo "Arquivo não apagado";
}
