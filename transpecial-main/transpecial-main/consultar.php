<?php

session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {

} else {
    header("Location: login.php");
}

include "consultaAgendamento.php";

if (!empty($_POST)) {
    $idAgendamento = $_POST['idAgendamento'];
    $resultado = consultarViagem($idAgendamento);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Transpecial</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/consultar.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="js/default.js"></script>
</head>

<body>
    <div class="menu">
        <a href="index.php">
            <img src="images/logodes.png" alt="Logo Transpecial">
        </a>
        <div class="menu-right">
            <a href="index.php" id="link-sobre-nos">Sobre Nós</a>
            <a href="agendar.php" id="link-agendar">Agendar</a>
        </div>
    </div>

    <form class="form" method="post">
        <div class="container">
            <h1 id="con">Consulta de Agendamentos</h1>
            <p id="dig">Digite o ID da viagem para consultar o status:</p>
            <input name="idAgendamento" id="id" type="text" placeholder="Digite aqui ID da viagem">
            <button formaction="consultar.php" id="botao" class="btn btn-second" type="submit">Consultar</button>

            <?php
            if (!empty($_POST)) {
                echo "<button formaction=\"excluirAgendamento.php\" id=\"botao\" class=\"btn btn-second\" type=\"submit\">Excluir viagem</button>";
            }
            ?>

            <div id="resultadoConsulta">

                <?php

                if (!empty($_POST)) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "ID: " . $row["id"] . " - Endereço de Embarque: " . $row["enderecoEmbarque"] . "<br>";
                        echo "Endereço de Desembarque: " . $row["enderecoDesembarque"] . "<br>";
                        echo "Data da Viagem: " . $row["dataviagem"] . "<br>";
                        echo "Horário de ida: " . $row["horarioLocal"] . "<br>";
                        echo "Horário de volta: " . $row["horarioRetorno"] . "<br>";
                    }
                }

                ?>

            </div>
        </div>

        <footer>
            <div class="wrapper">
                <div class="row">
                    <div class="coluna-footer">
                        <h3>CANAL DE ATENDIMENTO</h3>
                        <p class="footer">(15) 3236-1234</p>
                    </div>
                    <div class="coluna-footer">
                        <h3>ENDEREÇO</h3>
                        <p class="footer">R. Pedro Oliveira Neto, 98 - Jd. Panorama - CEP 18.030-329 - Sorocaba/SP</p>
                        <p class="footer">© 2023 | Todos os Direitos Reservados.</p>
                    </div>
                    <div class="coluna-footer">
                        <h3>HORÁRIO DE ATENDIMENTO</h3>
                        <p class="footer">Segunda à Sexta das 8h às 17h</p>
                    </div>
                </div>
            </div>
        </footer>
    </form>
</body>

</html>
