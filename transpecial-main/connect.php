<?php

    $servername = "localhost";  // nome do servidor MySQL
    $port       = 3306;
    $username   = "elisa";       // nome de usuário do MySQL
    $password   = "elisa123"; // senha do MySQL
    $dbname     = "TransPecial";    // nome do banco de dados

// Cria uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

// Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

?>