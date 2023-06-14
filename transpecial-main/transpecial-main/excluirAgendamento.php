<?php
session_start();

include "connect.php";

$idAgendamento = $_POST['idAgendamento'];

function excluirAgendamento($id) {
    global $conn;

    $sql = "DELETE FROM viagens WHERE id = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $id);

    $stmt->execute();

    $stmt->close();
    $conn->close();

}

excluirAgendamento($idAgendamento);
header("Location: consultar.php");
?>
