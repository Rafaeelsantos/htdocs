<?php
session_start();

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
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consultar o banco de dados para verificar o login
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login válido, redirecionar para a página home.php
    $_SESSION['email'] = $email; // Armazenar o email na sessão, se necessário
    header("Location: inicio.php");
    exit();
} else {
    // Login inválido, exibir mensagem de erro
    echo '<script>alert("Email ou senha incorretos. Tente novamente.");</script>';
    echo '<script>window.location.href = "login.php";</script>';
}

// Fechar conexão com o banco de dados
$conn->close();
?>
