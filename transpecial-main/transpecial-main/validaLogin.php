<?php
    session_start();

    include "connect.php";
    
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    function _login($login, $senha){

        global $conn;
    
        $sql = "SELECT * FROM usuario WHERE cpf = ? AND senha = ?";
        $stmt = $conn->prepare($sql);
    
        $stmt->bind_param("ss", $login, $senha);
    
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";

            $_SESSION['idUsuario']       = $row["id"];
            $_SESSION['usuario']         = $row["nome"];
            $_SESSION['logado']          = true;
            $_SESSION['enderecoUsuario'] = $row["enderecoRes"];
            

            header("Location: agendar.php");
        }
        } else {
            echo "Nenhum resultado encontrado.";
        }
    
        $conn->close();
    
    }

    _login($cpf, $senha);
?>
