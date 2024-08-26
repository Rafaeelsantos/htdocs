<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_type = $_POST['user_type'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aqui, você deve adicionar a lógica para verificar as credenciais do usuário
    // Por simplicidade, vamos assumir que as credenciais são válidas
    $_SESSION['user'] = $username;
    $_SESSION['user_type'] = $user_type;
    
    header("Location: home.php");
    exit();
}
?>