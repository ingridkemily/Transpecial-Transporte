<?php

// Dados a serem inseridos
$nome = "Alice Liddel";
$cpf = "123.456.789-12";
$dataNasc = "2010-01-02";
$telefone = "15912345678";
$acompanhante = 1;
$cadeirante = 1;
$cid = "G80";
$diagnostico = "Paralisia Cerebral";
$enderecoRes = "Rua das Flores, 62 - Jardim Estrela";
$login = "152";
$senha = "123456789";

// Montar a consulta SQL
$sql = "INSERT INTO Usuario (nome, cpf, dataNasc, telefone, acompanhante, cadeirante, cid, diagnostico, enderecoRes, login, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar a declaração SQL
$stmt = $mysqli->prepare($sql);

// Vincular os parâmetros aos valores
$stmt->bind_param("ssssiiissss", $nome, $cpf, $dataNasc, $telefone, $acompanhante, $cadeirante, $cid, $diagnostico, $enderecoRes, $login, $senha);

// Executar a declaração preparada
$resultado = $stmt->execute();

// Verificar se a execução do código SQL foi bem-sucedida
if (!$resultado) {
    die("Erro ao executar a consulta: " . $stmt->error);
}

// Fechar a declaração preparada
$stmt->close();

// Fechar a conexão com o banco de dados
$mysqli->close();

echo "Usuário cadastrado com sucesso!";

?>
