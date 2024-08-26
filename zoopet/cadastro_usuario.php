<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

// Verificação de idade
if ($idade < 18) {
    $_SESSION['msg'] = "Você precisa ter 18 anos ou mais para se cadastrar.";
    $_SESSION['msg_tipo'] = "erro";
    header("Location: usuariocadastro.php?msg_tipo=erro&msg=" . urlencode($_SESSION['msg']));
    exit();
}

// Verificação de email duplicado na tabela de administradores
$result_email_admin = "SELECT id FROM administradores WHERE email='$email'";
$resultado_email_admin = mysqli_query($conn, $result_email_admin);

if (mysqli_num_rows($resultado_email_admin) > 0) {
    $_SESSION['msg'] = "Erro.";
    $_SESSION['msg_tipo'] = "erro";
    header("Location: usuariocadastro.php?msg_tipo=erro&msg=" . urlencode($_SESSION['msg']));
    exit();
}

// Verificação de email duplicado na tabela de usuários
$result_email_usuario = "SELECT id FROM usuarios WHERE email='$email'";
$resultado_email_usuario = mysqli_query($conn, $result_email_usuario);

if (mysqli_num_rows($resultado_email_usuario) > 0) {
    $_SESSION['msg'] = "Este email já está cadastrado.";
    $_SESSION['msg_tipo'] = "erro";
    header("Location: usuariocadastro.php?msg_tipo=erro&msg=" . urlencode($_SESSION['msg']));
    exit();
}

// Verificação de senha
if (strlen($senha) < 4) {
    $_SESSION['msg'] = "A senha deve ter no mínimo 4 caracteres.";
    $_SESSION['msg_tipo'] = "erro";
    header("Location: usuariocadastro.php?msg_tipo=erro&msg=" . urlencode($_SESSION['msg']));
    exit();
}

// Criptografia da senha
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

// Inserção no banco de dados
$result_usuario = "INSERT INTO usuarios (nome, idade, email, telefone, estado, cidade, senha) VALUES ('$nome', '$idade', '$email', '$telefone', '$estado', '$cidade', '$senha_criptografada')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if ($resultado_usuario) {
    $_SESSION['msg'] = "Usuário cadastrado com sucesso!";
    $_SESSION['msg_tipo'] = "sucesso";
    header("Location: usuariocadastro.php?msg_tipo=sucesso&msg=" . urlencode($_SESSION['msg']));
} else {
    $_SESSION['msg'] = "Erro ao cadastrar o usuário. Tente novamente mais tarde.";
    $_SESSION['msg_tipo'] = "erro";
    header("Location: usuariocadastro.php?msg_tipo=erro&msg=" . urlencode($_SESSION['msg']));
}

exit();
?>
