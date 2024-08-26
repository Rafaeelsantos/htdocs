<?php
session_start();

// Credenciais do banco de dados
$servername = "localhost";
$username_db = "root"; // Substitua pelo seu usuário do banco de dados
$password_db = ""; // Substitua pela sua senha do banco de dados
$dbname = "coracaoemacao"; // Substitua pelo nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$tipo_usuario = $_POST['user_type'];
$nome_usuario = $_POST['username'];
$email_usuario = $_POST['email'];
$senha_usuario = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografa a senha

// SQL para inserir os dados
$sql = "INSERT INTO usuarios (tipo_usuario, nome_usuario, email_usuario, senha_usuario) VALUES ('$tipo_usuario', '$nome_usuario', '$email_usuario', '$senha_usuario')";

if ($conn->query($sql) === TRUE) {
    echo '<script>
            alert("Cadastro realizado com sucesso!");
            window.location.href = "login.php";
          </script>';
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
