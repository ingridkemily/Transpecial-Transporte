<?php
$host = 'localhost';
$user = 'root';
$password = '123projeto*';
$database = 'TransPecial';

// Conectar ao servidor MySQL
$connection = mysqli_connect($host, $user, $password, $database);

// Verificar se a conexão foi estabelecida com sucesso
if (!$connection) {
    die('Erro ao conectar ao MySQL: ' . mysqli_connect_error());
}

echo 'Conexão com o MySQL estabelecida com sucesso!';

// ... Resto do seu código PHP ...

// Fechar a conexão
mysqli_close($connection);
?>
