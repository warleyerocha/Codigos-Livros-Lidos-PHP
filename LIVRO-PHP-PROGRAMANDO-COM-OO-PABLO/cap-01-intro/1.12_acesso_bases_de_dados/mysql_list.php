<?php
//abre a conexão
$conn = mysqli_connect('localhost', 'root', 'root', 'book');

//define a culsulta que será ralizada
$query = 'SELECT code, name FROM famosos';

//envia a consulta para o banco
$result = mysqli_query($conn, $query);

var_dump($result);

if ($result) {
//    percorre o resultado da pesquisa
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['code'] . " = " . $row['name'] . "<br>";
    }
}

mysqli_close($conn);