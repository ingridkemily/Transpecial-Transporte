<?php
// Conectar ao banco de dados
$conexao = mysqli_connect("localhost", "usuario", "senha", "banco_de_dados");

// Obter as informações do formulário
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

// Consulta SQL para buscar um usuário com as credenciais fornecidas
$consulta = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";

// Executar a consulta
$resultado = mysqli_query($conexao, $consulta);

// Verificar se a consulta retornou um usuário válido
if (mysqli_num_rows($resultado) > 0) {
  // Usuário autenticado com sucesso
  echo "autenticado";
} else {
  // Credenciais inválidas, exibir uma mensagem de erro
  echo "erro";
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
