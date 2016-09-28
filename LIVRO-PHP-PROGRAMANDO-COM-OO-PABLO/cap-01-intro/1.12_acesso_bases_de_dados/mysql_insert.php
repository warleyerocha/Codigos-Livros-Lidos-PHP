<?php

//abre a conexão
$conn = mysqli_connect('localhost', 'root', 'root', 'book');

//insere vários registros
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (1, 'Érico Veríssimo')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (2, 'John Lenon')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (3, 'Mahatma Gandhi')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (4, 'Ayrton Senna')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (5, 'Charlie Chaplin')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (6, 'Anita Garibaldi')");
mysqli_query($conn, "INSERT INTO famosos (code, name) VALUES (7, 'Candido Souza')");

//fecha a conexão
mysqli_close($conn);