<?php
session_start();
// Verifica se há sessão de admin ou usuário
if (isset($_SESSION['admin_id'])) {
    $nomeUsuario = $_SESSION['admin_name'];
} elseif (isset($_SESSION['user_id'])) {
    $nomeUsuario = $_SESSION['user_name'];
} else {
    // Caso não haja sessão, redireciona para a página de login
    header("Location: usuariologin.php");
    exit();
}
?>



<h1>Bem-vindo, <?php echo $nomeUsuario; ?>!</h1>
    <p>Esta é a página principal.</p>
    <a href="logout.php">Sair</a>