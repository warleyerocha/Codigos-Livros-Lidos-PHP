<?php

function hello() {
//    obtem quais são os argumentos
    $arg = func_get_args();

//    obtem quantos argumentos são
    $qtd = func_num_args();

    for( $i = 0; $i < $qtd; $i ++ ) {
        echo "Hello " . $arg[$i] . "!<br>";
    }
}

hello('Pedro', 'Paulo', 'Thiago', 'João', 'Maria');



function getFilesCss() {
    $arg = func_get_args();
    $qtd = func_num_args();

    for( $i = 0; $i < $qtd; $i ++ ) {
        echo '<link rel="stylesheet" href="' . $arg[$i] . '"/>';
    }
}

getFilesCss(
    'src/Candido/Produto.css',
    'src/Candido/Candido.css'
);
