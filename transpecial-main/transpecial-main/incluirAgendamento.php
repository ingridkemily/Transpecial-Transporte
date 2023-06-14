<?php
session_start();

include "connect.php";

$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$dataviagem = $_POST['dataviagem'];
$causa = $_POST['causa'];

// Pegar dados da SESSION ao fazer login gravar na SESSION o id do usuário.
$idUsuario = $_SESSION['idUsuario'];
$enderecoEmbarque = $_SESSION['enderecoUsuario'];
$horaLocal = $_POST['horaLocal'];
$horaRetorno = $_POST['horaRetorno'];
$dataviagem = $_POST['dataviagem'];
$causa = $_POST['causa'];
$enderecoDesembarque = $cep . ", " . $rua . ", " . $numero . ", " . $bairro . ", " . $cidade . ", " . $uf . "/" . $uf;

function incluirAgendamento($idUsuario, $enderecoEmbarque, $enderecoDesembarque, $horaLocal, $horaRetorno, $dataviagem, $causa )
{
    global $conn;

    $sql = "INSERT INTO viagens (idUsuario, enderecoEmbarque, enderecoDesembarque, horarioLocal, horarioRetorno, dataviagem,causa) VALUES (?, ?, ?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssss", $idUsuario, $enderecoEmbarque, $enderecoDesembarque, $horaLocal, $horaRetorno, $dataviagem,$causa);

    $stmt->execute();

    $idAgendamento = $stmt->insert_id;

    $stmt->close();
    $conn->close();

    return $idAgendamento;
}

$retorno = incluirAgendamento($idUsuario, $enderecoEmbarque, $enderecoDesembarque, $horaLocal, $horaRetorno, $dataviagem, $causa );

echo "<script>
    var idAgendamento = " . $retorno . ";
    var confirmation = window.confirm('Agendamento incluído! ID: ' + idAgendamento + '. ESSE ID É EXCLUSIVO DESTA VIAGEM E SÓ SERÁ POSSÍVEL CONSULTAR OU EXCLUIR A VIAGEM ATRAVÉS DELE: ID: ' + idAgendamento + '.');
    if (confirmation) {
        // Redireciona para a página 'agendar.php'
        window.location.href = 'agendar.php';
    } else {
        // Redireciona para a página 'agendar.php' mesmo se o usuário cancelar o prompt
        window.location.href = 'agendar.php';
    }
</script>";
?>
