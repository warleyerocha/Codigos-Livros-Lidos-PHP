<?php
$conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=root");

//define a culsulta que será ralizada
$query = 'SELECT codigo, nome FROM famosos';

//envia a consulta para o banco
$result = pg_query($conn, $query);

if ($result) {
//    percorre o resultado da pesquisa
    while($row = pg_fetch_assoc($result)) {
        echo $row['codigo'] . " = " . $row['nome'] . "<br>";
    }
}

pg_close($conn);