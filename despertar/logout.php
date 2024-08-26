<?php
session_start();

// Encerrar a sessão
session_unset();
session_destroy();

// Redirecionar para a página de login ou outra página após o logout
header("Location: cadastro.php");
exit();
?>
