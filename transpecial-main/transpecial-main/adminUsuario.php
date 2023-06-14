<?php
session_start();

include "connect.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dataNasc = $_POST['dataNasc'];
$enderecoRes = $_POST['enderecoRes'];
$telefone = $_POST['telefone'];
$acompanhante = $_POST['acompanhante'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cadeirante = $_POST['cadeirante'];

function adminUsuario($nome, $cpf, $dataNasc, $telefone, $acompanhante, $cadeirante, $enderecoRes, $login, $senha)
{
    global $conn;

    $sql = "INSERT INTO usuario (nome, cpf, dataNasc, telefone, acompanhante, cadeirante, enderecoRes, login, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssssss", $nome, $cpf, $dataNasc, $telefone, $acompanhante, $cadeirante, $enderecoRes, $login, $senha);

    $stmt->execute();

    $id = $stmt->insert_id;

    $stmt->close();
    $conn->close();

    return $id;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $retorno = adminUsuario($nome, $cpf, $dataNasc, $telefone, $acompanhante, $cadeirante, $enderecoRes, $login, $senha);

    echo "<script>
        var id = " . htmlspecialchars($retorno) . ";
        var confirmation = window.confirm('Cadastro incluído! ID: ' + id + '.');
        if (confirmation) {
            // Redireciona para a página 'Admin.php'
            window.location.href = 'Admin.php';
        } else {
            // Redireciona para a página 'Admin.php' mesmo se o usuário cancelar o prompt
            window.location.href = 'Admin.php';
        }
    </script>";
}
?>

