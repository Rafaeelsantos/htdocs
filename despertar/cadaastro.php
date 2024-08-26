<?php
// Conectar ao banco de dados
$servername = "localhost"; // Host do banco de dados (normalmente localhost)
$username = "root"; // Usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "despertar"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$senha = $_POST['senha'];

// Preparar e executar a query SQL para inserir os dados
$sql = "INSERT INTO usuarios (nome, email, telefone, estado, cidade, senha)
        VALUES ('$nome', '$email', '$telefone', '$estado', '$cidade', '$senha')";

if ($conn->query($sql) === TRUE) {
    // Registro realizado com sucesso
    // Mostrar mensagem de sucesso
    echo '<script>alert("Cadastro realizado com sucesso!");</script>';
    // Redirecionar para a página de login
    echo '<script>window.location.href = "login.php";</script>';
} else {
    // Erro ao registrar
    echo "Erro ao registrar: " . $conn->error;
}

// Fechar conexão com o banco de dados
$conn->close();
?>
