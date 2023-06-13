<?php

session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {

} else {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Transpecial</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/agendar.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="js/agendar.js"></script>

</head>

<body>

    <div class="menu">
        <a>
            <img src="images/logodes.png" alt="Logo Transpecial">
        </a>
        <div class="menu-right">
            <a href="index.php" id="link-index">Sobre Nós</a>
            <a href="consultar.php" id="link-consultar">Consultar</a>
        </div>
    </div>

    <div class=" div-alinhada-a-esquerda">

        <h1> Agendamento de Transporte</h1>

        <!-- Aqui vão as outras seções da página -->

        <p style="margin-left: 15px;">Solicite o agendamento preenchendo o formulário abaixo: <p>

        <p style="margin-left: 15px;">Você poderá acompanhar o status do seu agendamento na aba ‘Consultar’ no menu superior do site.</p>
        <p style="color: red; font-weight: bold; margin-left: 15px;">Atenção: Todos os campos são obrigatórios*</p>

        <!-- Início do formulário -->

        <div class="campo">

            <form method="post" action="incluirAgendamento.php">
                <div class="campo div">
                    <label for="embarque"><strong>Local de Embarque</strong></label>
                    <p>O local de embarque sempre será o endereço cadastrado. Caso haja mudança residencial, favor abrir uma solicitação para que seja alterado no sistema.</p>
                </div>

                <fieldset class="grupo div">
                    <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                    <div class="campo div">

                        <div>
                            <label for="destino"><strong>Local de Destino</strong></label>
                            <label for="txtCep"><strong>CEP</strong></label>
                            <input name="cep" type="text" destino="CEP" id="txtCep" required>
                        </div>

                        <div>
                            <label for="txtRua"><strong>Rua</strong></label>
                            <input type="text" name="rua" destino="rua" id="txtRua" required>
                        </div>

                        <div>
                            <label for="txtNum"><strong>Número</strong></label>
                            <input type="text" name="numero" destino="numero" id="txtNum" required>
                        </div>

                        <div>
                            <label for="txtBairro"><strong>Bairro</strong></label>
                            <input type="text" name="bairro" destino="bairro" id="txtBairro" required>
                        </div>

                        <div>
                            <label for="txtCidade"><strong>Cidade</strong></label>
                            <input type="text" name="cidade" destino="cidade" id="txtCidade" required>
                        </div>

                        <div>
                            <label for="txtEstado"><strong>Estado</strong></label>
                            <input type="text" name="uf" destino="estado" id="txtEstado" required>
                        </div>
                    </div>

                    <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
                    <div class="campo div">
                        <label for="data"><strong>Data</strong></label>
                        <input type="date" name="dataviagem" id="data" required>
                    </div>

                </fieldset>

                <!-- Campo de desenvolvimento web com 3 opções de botões selecionáveis (radio button) e css de classe "campo" -->
                <div class="divcausa">
                    <label for="ida"><strong>Causa da viagem</strong></label>
                    <select id="causa" name="causa" required>
                        <option selected disabled value="">Selecione</option>
                        <option>Saúde</option>
                        <option>Social</option>
                        <option>Educação</option>
                        <option>Esporte</option>
                        <option>Lazer</option>

                    </select>
                </div>


                <!-- Campo de senioridade com 3 opções para escolha (select option) e css de classe "campo" -->
                <div class="campo div">
                    <label for="ida"><strong>Horário Ida</strong></label>
                    <select id="ida" name="horaLocal" required>
                        <option selected disabled value="">Selecione</option>
                        <option>SEM IDA</option>
                        <option>6:00</option>
                        <option>6:30</option>
                        <option>7:00</option>
                        <option>7:30</option>
                        <option>8:00</option>
                        <option>8:30</option>
                        <option>9:00</option>
                        <option>9:30</option>
                        <option>10:00</option>
                        <option>10:30</option>
                        <option>11:00</option>
                        <option>11:30</option>
                        <option>12:00</option>
                        <option>12:30</option>
                        <option>13:00</option>
                        <option>13:30</option>
                        <option>14:00</option>
                        <option>14:30</option>
                        <option>15:00</option>
                        <option>15:30</option>
                        <option>16:00</option>
                        <option>16:30</option>
                        <option>17:00</option>
                        <option>17:30</option>
                        <option>18:00</option>
                        <option>18:30</option>
                        <option>19:00</option>
                    </select>
                </div>

                <div class="campo div">
                    <label for="volta"><strong>Horário Volta</strong></label>
                    <select id="volta" name="horaRetorno" required>
                        <option selected disabled value="">Selecione</option>
                        <option>SEM VOLTA</option>
                        <option>6:00</option>
                        <option>6:30</option>
                        <option>7:00</option>
                        <option>7:30</option>
                        <option>8:00</option>
                        <option>8:30</option>
                        <option>9:00</option>
                        <option>9:30</option>
                        <option>10:00</option>
                        <option>10:30</option>
                        <option>11:00</option>
                        <option>11:30</option>
                        <option>12:00</option>
                        <option>12:30</option>
                        <option>13:00</option>
                        <option>13:30</option>
                        <option>14:00</option>
                        <option>14:30</option>
                        <option>15:00</option>
                        <option>15:30</option>
                        <option>16:00</option>
                        <option>16:30</option>
                        <option>17:00</option>
                        <option>17:30</option>
                        <option>18:00</option>
                        <option>18:30</option>
                        <option>19:00</option>
                    </select>
                </div>
                <!-- Início do formulário -->
                <div class="campo">

                    <form>
                        <!-- Botão para enviar o formulário -->
                        <div class="campo div div-direita">
                            <button class="btn btn-second" type="submit">AGENDAR</button>
                        </div>
                    </form>
                </div>

                <script src="js/agendar.js"></script>

        </form>
        </div>
        </div>

        <script src="js/default.js"></script>
    </body>
    <footer>
        <div class="wrapper">
            <div class="row">
                <div class="coluna-footer">
                    <h3>CANAL DE ATENDIMENTO</h3>
                    <p.footer>(15) 3236-1234</p>
                </div>
                <div class="coluna-footer">
                    <h3>ENDEREÇO</h3>
                    <p.footer>R. Pedro Oliveira Neto, 98 - Jd. Panorama - 
                  CEP 18.030-329 - Sorocaba/SP</p>
                    <p.footer>© 2023| Todos os Direitos Reservados.</p>
                </div>
                <div class="coluna-footer">
                    <h3>HORÁRIO DE ATENDIMENTO</h3>
                    <p.footer>Segunda à Sexta das 8h às 17h</p>
                </div>
            </div>
        </div>

    </footer>

</html>
