<?php
session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {

} else {
    header("Location: loginAdmin.php");
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
</head>

<body>
    <div class="menu">
        <a>
            <img src="images/logodes.png" alt="Logo Transpecial">
        </a>
        <div class="menu-right">
            <a href="index.php" id="link-index">Sobre Nós</a>
        </div>
    </div>

    <div class="div-alinhada-a-esquerda">
        <h1>Cadastro de Usuários</h1>
        <p class="recado">Cadastre o usuário preenchendo o formulário abaixo:</p>
        <p class="atencao">Atenção: Todos os campos são obrigatórios*</p>
        <div class="campo">
            <form method="post" action="adminUsuario.php">
                <fieldset class="grupo div">
                    <div class="campo div espaco">
                        <div>
                            <label for=""><strong>Informações do Usuário</strong></label>
                            <label for="txtNome">Nome Completo</label>
                            <input type="text" name='nome' destino="Nome" id="txtNome" required>
                        </div>
                        <div>
                            <label for="txtCpf">CPF</label>
                            <p>(Sem pontuação)</p>
                            <input type="text" name='cpf' destino="cpf" id="txtCpf" required>
                        </div>
                        <div>
                            <label for="txtTelefone">Telefone</label>
                            <input type="text" name='telefone' destino="Telefone" id="textTelefone" required>
                        </div>
                        <div class="espaco">
                            <label for="txtLogin">Login</label>
                            <p>(CPF do usuário)</p>
                            <input type="text" name='login' destino="login" id="txtLogin" required>
                        </div>
                        <div>
                            <label for="txtSenha">Senha</label>
                            <input type="text" name='senha' destino="senha" id="txtSenha" required>
                        </div>
                        <div class="espaco">
                            <label for="txtAcompanhante">Acompanhante</label>
                            <p>(Sim ou Não)</p>
                            <input type="text" name='acompanhante' destino="acompanhante" id="txtAcompanhante" required>
                        </div>
                        <div>
                            <label for="txtCadeirante">Cadeirante</label>
                            <p>(Sim ou Não)</p>
                            <input type="text" name='cadeirante' destino="cadeirante" id="txtCadeirante" required>
                        </div>
                        <div class="espaco">
                            <label for="txtEndereçoRes">Endereço Residencial</label>
                            <p>(Rua, número, Bairro, Cidade - Estado)</p>
                            <input type="text" name='enderecoRes' destino="endereçoRes" id="txtEndereçoRes" required>
                        </div>
                    </div>
                    <div class="campo div">
                        <div class="espaco">
                            <label for="data">Data de Nascimento</label>
                            <input type="date" name="dataNasc" id="data" required>
                        </div>
                    </div>
                </fieldset>
                <div class="campo">
                    <div class="campo div div-direita">
                        <button class="btn btn-second" type="submit">CADASTRAR</button>
                    </div>
                </div>
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
                <p class="footer">(15) 3236-1234</p>
            </div>
            <div class="coluna-footer">
                <h3>ENDEREÇO</h3>
                <p class="footer">
                    R. Pedro Oliveira Neto, 98 - Jd. Panorama - CEP 18.030-329 - Sorocaba/SP
                </p>
                <p class="footer">© 2023| Todos os Direitos Reservados.</p>
            </div>
            <div class="coluna-footer">
                <h3>HORÁRIO DE ATENDIMENTO</h3>
                <p class="footer">Segunda a Sexta das 8h às 17h</p>
            </div>
        </div>
    </div>
</footer>

</html>
