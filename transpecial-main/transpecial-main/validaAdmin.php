<?php
    session_start();

    include "connect.php";
    
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    function _login($login, $senha){

        global $conn;
    
        $sql = "SELECT * FROM administrador WHERE cpf = ? AND senha = ?";
        $stmt = $conn->prepare($sql);
    
        $stmt->bind_param("ss", $login, $senha);
    
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";

            $_SESSION['logado']          = true;            

            header("Location: Admin.php");
        }
        } else {
            echo "Nenhum resultado encontrado.";
        }
    
        $conn->close();
    
    }

    _login($cpf, $senha);
?>
