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

<!DOCTYPE html>
<html lang="PT-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/inicio.css">
    <link rel="icon" href="https://imgur.com/y8GxgSO.png" type="image/x-icon">
    <title>ZOOPET</title>
</head>

<body>

    <!--------------------------------------------------------------- INÍCIO DO HEADER ----------------------------------------------------------------->
    <header>
        <div class="logo">
            <img src="https://imgur.com/5eEwTAd.png" alt="Logo">
        </div>
        <nav class="categories">
            <ul>
                <li><a href="inicio.php">INÍCIO</a></li>
                <li><a href="sobrenos.php">SOBRE NÓS</a></li>
                <li><a href="#category3">EMPRESA</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </nav>
        <div class="profile-menu">
            <!-- Ícone de perfil -->
            <a href="meu-perfil.php"><i class="fas fa-user-circle"></i></a>
            <!-- Ícone de menu -->
            <div class="menu-icon" id="menuIcon">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <!----------------------------------------------------------------- FIM DO HEADER ------------------------------------------------------------------->



    <!--------------------------------------------------------------------- SIDEBAR --------------------------------------------------------------------->
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Menu exclusivo para administradores -->
        <?php if (isset($_SESSION['admin_id'])) : ?>
            <a href="javascript:void(0)" class="category">Novos requisitos</a>
            <ul class="subcategory hidden">
                <li><a href="#">Teste</a></li>
            </ul>
        <?php endif; ?>
        <!-- Fim do menu exclusivo para administradores -->

        <a href="javascript:void(0)" class="category">Pets</a>
        <ul class="subcategory hidden">
            <li><a href="#"><img src="https://imgur.com/zH4YYOx.png" alt="Cães">Cães</a></li>
            <li><a href="#"><img src="https://imgur.com/6qCN1SL.png" alt="Gatos">Gatos</a></li>
            <li><a href="#"><img src="https://imgur.com/ov6rggw.png" alt="Pássaros">Pássaros</a></li>
            <li><a href="#"><img src="https://imgur.com/yYBfsfQ.png" alt="Peixes">Peixes</a></li>
            <li><a href="#"><img src="https://imgur.com/LwCDXaL.png" alt="Hamsters">Hamsters</a></li>
            <li><a href="#"><img src="https://imgur.com/mklnTf4.png" alt="Coelhos">Coelhos</a></li>
            <li><a href="#"><img src="https://imgur.com/CYpUt21.png" alt="Porquinho da Índia">Porquinho da Índia</a></li>
            <li><a href="#"><img src="https://imgur.com/Bnm9Hfe.png" alt="Tartaruga">Tartaruga</a></li>
            <li><a href="#"><img src="https://imgur.com/Ryd3IWZ.png" alt="Répteis">Répteis</a></li>
            <li><a href="#"><img src="https://imgur.com/bnL1Nim.png" alt="Áves Exóticas">Áves Exóticas</a></li>
        </ul>

        <a href="javascript:void(0)" class="category">Registrar pet</a>
        <ul class="subcategory hidden">
            <li><a href="cadastrarpet.php"><img src="https://imgur.com/DPQXdhX.png" alt="Registrar">Registrar</a></li>
        </ul>
    </div>
    <!------------------------------------------------------------------ FIM DO SIDEBAR -------------------------------------------------------------------->



    <!------------------------------------------------------------------ INÍCIO DO BANNER ------------------------------------------------------------------>
    <div class="banner" style="background-image: url('https://imgur.com/YLEGGiT.png');">
        <div class="banner-content">
            <img src="https://imgur.com/wtltCSV.png" alt="Imagem de Adoção de Animais" class="banner-image">
            <div class="banner-text">
                <h1>ADOTE, NÃO COMPRE!!!</h1>
                <p>Transforme vidas: adote um pet e ganhe um companheiro para sempre.</p>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------ FIM DO BANNER --------------------------------------------------------------------->



    <!------------------------------------------------------------INÍCIO DO SOBRE------------------------------------------------------------>
    <div class="sobre">
        <div class="sobre-content">
            <div class="imagem-esquerda">
                <img src="https://imgur.com/hQbgEoq.png" alt="Adote um Pet" class="small-image">
            </div>
            <div class="texto">
                <h2>Conheça a ZOOPET</h2>
                <p>Na ZOOPET, acreditamos que cada animal merece um lar amoroso e seguro. Com nossa missão de transformar vidas, ajudamos pets abandonados a encontrarem famílias que lhes darão amor e cuidado para sempre. Desde o nosso início, já ajudamos centenas de animais a encontrarem novos lares, e continuamos a trabalhar incansavelmente para reduzir o número de animais desabrigados. Junte-se a nós nesta missão e faça a diferença!</p>
            </div>
            <div class="imagem-direita">
                <img src="https://imgur.com/fbQ2JH1.png" alt="Adote um Pet" class="small-image">
            </div>
        </div>
    </div>
    <!------------------------------------------------------------FIM DO SOBRE------------------------------------------------------------>






















    <!------------------------------------------------------------------ INÍCIO DAS LOGOS DAS EMPRESAS PARCEIRAS ------------------------------------------------------------------>
    <div class="partners">
        <h2>PARCEIROS</h2> <!-- Título adicionado -->
        <div class="partner-logo">
            <img src="https://imgur.com/Q6KRDec.png" alt="Logo da Empresa 1">
        </div>
        <div class="partner-logo">
            <img src="https://imgur.com/D43sPl8.png" alt="Logo da Empresa 2">
        </div>
        <div class="partner-logo">
            <img src="https://imgur.com/FFBc6Sx.png" alt="Logo da Empresa 3">
        </div>
        <div class="partner-logo">
            <img src="https://imgur.com/g3jLMI3.png" alt="Logo da Empresa 4">
        </div>
    </div>
    <!------------------------------------------------------------------ FIM DAS LOGOS DAS EMPRESAS PARCEIRAS ---------------------------------------------------------------------->

















    <!------------------------------------------------------------------ INÍCIO DO RODAPÉ ------------------------------------------------------------------>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section contact">
                <h2>Contato</h2>
                <div class="social-icons">
                    <img src="https://imgur.com/gSwpkmQ.png" alt="Facebook">
                    <img src="https://imgur.com/AqwqTph.png" alt="LinkedIn">
                    <img src="https://imgur.com/8h6oFsu.png" alt="Email">
                </div>
            </div>
            <div class="footer-section about">
                <h2>Sobre Nós</h2>
                <p>A ZOOPET é um programa criado para estreitar laços entre pessoas que têm o sonho de adotar um pet e nossas ONGs e protetores parceiros. Vamos juntos incentivar a adoção, conscientizar sobre a posse responsável e fomentar a cultura de doação em prol do bem-estar animal..</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Adoção de Pets | Desenvolvido por ZOOPET</p>
        </div>
    </footer>
    <!------------------------------------------------------------------ FIM DO RODAPÉ ---------------------------------------------------------------------->
    <script src="recursos/js/inicio.js"></script>
</body>

</html>