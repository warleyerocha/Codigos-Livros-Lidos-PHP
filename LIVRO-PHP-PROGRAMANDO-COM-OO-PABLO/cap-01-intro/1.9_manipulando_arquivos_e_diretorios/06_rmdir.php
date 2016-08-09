<?php

// remove um diretório

$folder = "files/folder";

if (rmdir($folder))
    echo "Diretório apagado com sucesso";
else
    echo "Erro ao apagar diretório";
