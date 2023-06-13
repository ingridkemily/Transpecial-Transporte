<?php
    session_start();

    // session_start();
    include "connect.php";
    
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    function _login($login, $senha){

        global $conn;
    
        // Prepara a consulta SQL com placeholders
        $sql = "SELECT * FROM administrador WHERE cpf = ? AND senha = ?";
        $stmt = $conn->prepare($sql);
    
        // Vincula os valores aos placeholders
        $stmt->bind_param("ss", $login, $senha);
    
        // Executa a consulta
        $stmt->execute();
    
        // Obtém os resultados
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
        // Processar os resultados da consulta
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";

            $_SESSION['logado']          = true;            

            header("Location: Admin.php");
        }
        } else {
            echo "Nenhum resultado encontrado.";
        }
    
        // Fecha a conexão
        $conn->close();
    
    }

    _login($cpf, $senha);
?>
