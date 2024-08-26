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

// Verifica se o formulário foi submetido via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL usando prepared statement
    $stmt = $conn->prepare("SELECT id, email_usuario, senha_usuario FROM usuarios WHERE email_usuario=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o usuário foi encontrado
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verifica se a senha corresponde usando password_verify
        if (password_verify($password, $user['senha_usuario'])) {
            // Login bem-sucedido, configurar variáveis de sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['email_usuario'];
            $_SESSION['logged_in'] = true;
            $stmt->close();
            $conn->close();
            header("Location: home2.php"); // Redirecionar para a página principal ou dashboard
            exit();
        } else {
            // Senha incorreta
            echo "Senha incorreta.";
        }
    } else {
        // Usuário não encontrado
        echo "Usuário não encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>
