<?php
$fp = fopen("files/fwrite.txt", "w");

$message = "Minha primeira linha";
$message1 = "Minha Segunda linha";
$message2 = "Minha terceira linha";

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// fwrite
// grava uma string
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

fwrite($fp, $message . PHP_EOL);
fwrite($fp, $message1 . PHP_EOL);
fwrite($fp, $message2 . PHP_EOL);

fclose($fp);

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// file_put_contents
// grava uma string e retorna uma quantidade de bits
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$message_file_put_contents = "Mensagem escrita por: file_put_contents";

file_put_contents("files/file_put_contents.txt", $message_file_put_contents);

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// file_get_contents
// lê o conteúdo do arquivo e retorna uma string
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

print_r( file_get_contents("files/file_put_contents.txt") );

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// file
// lê o conteúdo do arquivo e retorna um array
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$file = file("files/file.txt");

foreach($file as $message) {
    var_dump($message) ;
}

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// copy
// copia o arquivo ára outro local/nome
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$origin = "files/copy.txt";
$destiny = "files/copy_true.txt";

if (copy($origin, $destiny)) {
    echo "Comando copy, copiou o arquivo";
} else {
    echo "ERROR: Comando copy, não copiou o arquivo";
}

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
// rename
// renomeia o arquivo
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

$origin = "files/rename.txt";
$destiny = "files/rename_true.txt";

if (rename($origin, $destiny)) {
    echo "Arquivo Renomeado";
} else {
    echo "ERROR: Erro ao renomear o arquivo";
}
