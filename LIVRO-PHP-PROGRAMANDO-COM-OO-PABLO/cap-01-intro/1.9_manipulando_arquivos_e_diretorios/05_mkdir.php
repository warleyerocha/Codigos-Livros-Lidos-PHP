<?php

// cria um diretório

$folder = "files/folder";

if (mkdir($folder, 0777))
    echo "Diretório criado com sucesso";
else
    echo "Erro ao criar o diretório";
