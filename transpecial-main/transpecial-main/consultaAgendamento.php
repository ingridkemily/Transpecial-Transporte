<?php

include "connect.php";

function consultarViagem($idAgendamento) {
    global $conn;

    $sql = "SELECT * FROM viagens WHERE id = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $idAgendamento);

    $stmt->execute();

    $result = $stmt->get_result();

    $stmt->close();
    $conn->close();

    return $result;
}

?>
