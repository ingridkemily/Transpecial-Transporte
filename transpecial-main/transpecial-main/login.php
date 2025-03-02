<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Transpecial</title>
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="js/default.js"></script>
</head>
<body>

<div class="menu">
    <a href="index.php">
        <img src="images/logodes.png" alt="Logo Transpecial">
    </a>
    <div class="menu-right">
        <a href="index.php" id="link-index">Sobre Nós</a>
        <a href="loginAdmin.php" id="link-loginAdmin">Administrador</a>

    </div>
</div>

<div class="container">
    <div class="content first-content">
        <div class="first-column">
            <h2 class="title title-primary">Bem vindo de volta!</h2>
            <p class="description description-primary">Acesse sua conta agora mesmo</p>
        </div>
        <div class="second-column">
            <h2 class="title title-second">Faça seu Login</h2>
            <p class="description description-second">Preencha os campos abaixo com os seus dados de login</p>

            <form class="form" method="post" action="validaLogin.php">
                <label class="label-input" for="cpf">
                    <i class="far fa-user icon-modify"></i>
                    <input type="text" placeholder="CPF" name="cpf">
                </label>
                <label class="label-input" for="senha">
                    <i class="fas fa-lock icon-modify"></i>
                    <input type="password" placeholder="Senha" name="senha">
                </label>
                <button class="btn btn-second" type="submit">Entrar</button>
            </form>
            <p id="error-message" class="error-message"></p>
        </div>
    </div>
</div>
<script src="js/default.js"></script>
// <!-- <script>
//     function validarLogin() {
//         var cpf = document.getElementById("cpf").value;
//         var senha = document.getElementById("senha").value;

//         // Verificar se o CPF e a senha são válidos (exemplo: CPF: 123456789, Senha: senha123)
//         if (cpf === "123456789" && senha === "senha123") {
//             window.location.href = "agendar.php"; // Redirecionar para a página de agendamento
//         } else {
//             var errorMessage = document.getElementById("error-message");
//             errorMessage.textContent = "CPF ou senha inválidos. Por favor, tente novamente.";
//         }
//     }
// </script> -->

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

