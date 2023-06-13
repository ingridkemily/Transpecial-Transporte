<?php
session_start();

include "connect.php";

$idAgendamento = $_POST['idAgendamento'];

function excluirAgendamento($idAgendamento) {
    global $conn;

    // Prepara a consulta SQL com placeholders
    $sql = "DELETE FROM viagens WHERE idAgendamento = ?";
    $stmt = $conn->prepare($sql);

    // Vincula os valores aos placeholders
    $stmt->bind_param("s", $id);

    // Executa a consulta
    $stmt->execute();

    // Fecha a conexão
    $stmt->close();
    $conn->close();

}

excluirAgendamento($idAgendamento);
header("Location: consultar.php");
?>
