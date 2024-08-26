<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirecionar para a página de login se não estiver logado
    exit();
}

// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "despertar";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter informações do usuário a partir do email na sessão
$email = $_SESSION['email'];
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibir as informações do usuário
    $row = $result->fetch_assoc();
    $nome = $row['nome'];
    $telefone = $row['telefone'];
    $estado = $row['estado'];
    $cidade = $row['cidade'];

    // Exemplo de exibição das informações
    echo "<h1>Perfil de $nome</h1>";
    echo "<p>Email: $email</p>";
    echo "<p>Telefone: $telefone</p>";
    echo "<p>Estado: $estado</p>";
    echo "<p>Cidade: $cidade</p>";
} else {
    echo "Usuário não encontrado.";
}

// Fechar conexão
$conn->close();
?>
