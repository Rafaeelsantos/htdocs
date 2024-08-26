<?php
// Conecte-se ao banco de dados
$servername = "127.0.0.1"; // Nome do servidor MySQL
$username = "root"; // Nome de usuário MySQL
$password = ""; // Senha do MySQL
$dbname = "tts"; // Nome do banco de dados

// Crie uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se todos os campos do formulário foram preenchidos
    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
        // Recupere os dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        // Verifique se nenhum dos campos está vazio
        if (!empty($nome) && !empty($email) && !empty($senha)) {
            // Insira os dados na tabela do banco de dados
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Cadastro realizado com sucesso! Volte à página anterior e faça o seu login em 'entrar'";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Por favor, preencha todos os campos do formulário.";
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}

// Feche a conexão
$conn->close();
?>