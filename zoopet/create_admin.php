<?php
include 'conexao.php'; // Arquivo de conexão com o banco de dados

$nome = 'Teste';
$email = 'testeadmin@gmail.com';
$senha = '1234'; // Senha em texto plano (não criptografada)
$funcao = 'Teste';

$sql = "INSERT INTO administradores (nome, email, senha, funcao) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nome, $email, $senha, $funcao);

if ($stmt->execute()) {
    echo "Administrador cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar administrador: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
