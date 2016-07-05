<?php
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// função anônima para remover acentos de algumas letras
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$remove_accents = function($str) {

    $letters_accents = [
        'Á','È','ô','Ç','á','è','Ò','ç','Â','Ë','ò','â','ë','Ø','Ñ','À','Ð','ø','ñ','à','ð','Õ','Å','õ','Ý','å','Í','Ö','ý','Ã','í','ö','ã',
        'Î','Ä','î','Ú','ä','Ì','ú','Æ','ì','Û','æ','Ï','û','ï','Ù','®','É','ù','©','é','Ó','Ü','Þ','Ê','ó','ü','þ','ê','Ô','ß','‘','’','‚','“','”','„'
    ];

    $letters_default = [
        'a','e','o','c','a','e','o','c','a','e','o','a','e','o','n','a','d','o','n','a','o','o','a','o','y','a','i','o','y','a','i','o','a',
        'i','a','i','u','a','i','u','a','i','u','a','i','u','i','u','','e','u','c','e','o','u','p','e','o','u','b','e','o','b','','','','','',''
    ];
    //str_replace — Substitui todas as ocorrências da string de procura com a string de substituição
    return str_replace($letters_accents, $letters_default, $str);
};

print( $remove_accents('Cândido José') );

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// remoção de vários termos
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$words = [];
$words[] = 'Cândido Souza';
$words[] = 'comentários';
$words[] = 'Ótimo';
$words[] = 'Código';
$words[] = 'tópicos';

var_dump( $words );

//array_map — Aplica uma função em todos os elementos dos arrays dados
$result = array_map( $remove_accents, $words);

var_dump( $result );

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// meus testes
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
$get_file_css = function () {
    $arg = func_get_args();
    $qtd = func_num_args();

    for( $i = 0; $i < $qtd; $i ++ ) {
        return '<link rel="stylesheet" href="' . $arg[$i] . '"/>';
    }
};

$files = [
    'styles/css/main.css',
    'styles/css/icons.css',
    'styles/css/font.css'
];

$result = array_map($get_file_css, $files);

var_dump( $result );


$get_file_js = function ($arg) {
    return '<link rel="stylesheet" href="' . $arg . '"/>';
};

$files_js = [
    'script/js/main.js',
    'script/js/icons.js',
    'script/js/fonts.js',
];

$result = array_map($get_file_css, $files_js);

var_dump( $result );


