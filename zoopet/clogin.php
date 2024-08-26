<?php
session_start();
include 'conexao.php'; // Inclui o arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica as credenciais na tabela de administradores
    $sql_admin = "SELECT * FROM administradores WHERE email = ? LIMIT 1";
    $stmt_admin = $conn->prepare($sql_admin);
    $stmt_admin->bind_param("s", $email);
    $stmt_admin->execute();
    $result_admin = $stmt_admin->get_result();

    if ($result_admin->num_rows == 1) {
        $row_admin = $result_admin->fetch_assoc();
        
        // Verifica se a senha fornecida corresponde à senha criptografada no banco de dados
        if ($senha === $row_admin['senha']) { // Se não criptografar a senha
            $_SESSION['admin_id'] = $row_admin['id'];
            $_SESSION['admin_name'] = $row_admin['nome'];
            header("Location: inicio.php");
            exit();
        } else {
            $_SESSION['msg'] = "Senha incorreta para administrador.";
            $_SESSION['msg_tipo'] = "erro";
            header("Location: usuariologin.php?msg_tipo=erro&msg=" . urlencode($_SESSION['msg']));
            exit();
        }
    }

    // Caso não encontre o email na tabela de administradores,
    // verifica na tabela de usuários comuns
    $sql_usuario = "SELECT * FROM usuarios WHERE email = ? LIMIT 1";
    $stmt_usuario = $conn->prepare($sql_usuario);
    $stmt_usuario->bind_param("s", $email);
    $stmt_usuario->execute();
    $result_usuario = $stmt_usuario->get_result();

    if ($result_usuario->num_rows == 1) {
        $row_usuario = $result_usuario->fetch_assoc();
        if (password_verify($senha, $row_usuario['senha'])) {
            $_SESSION['user_id'] = $row_usuario['id'];
            $_SESSION['user_name'] = $row_usuario['nome'];
            header("Location: inicio.php");
            exit();
        } else {
            $_SESSION['msg'] = "Senha incorreta para usuário.";
            $_SESSION['msg_tipo'] = "erro";
            header("Location: usuariologin.php?msg_tipo=erro&msg=" . urlencode($_SESSION['msg']));
            exit();
        }
    } else {
        $_SESSION['msg'] = "Email não encontrado.";
        $_SESSION['msg_tipo'] = "erro";
        header("Location: usuariologin.php?msg_tipo=erro&msg=" . urlencode($_SESSION['msg']));
        exit();
    }
} else {
    header("Location: usuariologin.php");
    exit();
}
?>
