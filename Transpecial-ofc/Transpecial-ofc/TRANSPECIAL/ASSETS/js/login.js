// Obter as informações do formulário
const cpf = document.getElementById("cpf").value;
const senha = document.getElementById("senha").value;

// Enviar as informações para o script PHP
const xhr = new XMLHttpRequest();
const url = "autenticar.php";
const params = `cpf=${cpf}&senha=${senha}`;
xhr.open("POST", url, true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    // Verificar a resposta do servidor
    const resposta = xhr.responseText;
    if (resposta === "autenticado") {
      // Usuário autenticado com sucesso, redirecionar para a página do dashboard
      window.location.href = "dashboard.php";
    } else {
      // Credenciais inválidas, exibir uma mensagem de erro
      const mensagem = document.getElementById("mensagem");
      mensagem.innerHTML = "CPF ou senha incorretos.";
    }
  }
};
xhr.send(params);
