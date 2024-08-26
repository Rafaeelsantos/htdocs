<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    $_SESSION['msg'] = "Você precisa estar logado como administrador para acessar esta página.";
    $_SESSION['msg_tipo'] = "erro";
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Bem-vindo, <?php echo $_SESSION['admin_name']; ?>!</h1>
    <p>Esta é a página principal.</p>
    <a href="logout.php">Sair</a>



</body>

</html>