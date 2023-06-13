<?php

include "connect.php";

function consultarViagem($idAgendamento) {
    global $conn;

    // Prepara a consulta SQL com placeholders
    $sql = "SELECT * FROM viagens WHERE idAgendamento = ?";
    $stmt = $conn->prepare($sql);

    // Vincula os valores aos placeholders
    $stmt->bind_param("s", $idAgendamento);

    // Executa a consulta
    $stmt->execute();

    // Obtém os resultados
    $result = $stmt->get_result();

    // Fecha a conexão
    $stmt->close();
    $conn->close();

    return $result;
}

// consultarViagem ($idAgendamento);
?>
