<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="recursos/js/home.js"></script>
    <link rel="icon" href="https://imgur.com/nXbepvg.png" type="image/x-icon">
    <title>Doações Solidárias</title>
</head>
<body>

<!-- INÍCIO DA PRIMEIRA BARRA DE NAVEGAÇÃO -->
<header class="header-1">
    <nav class="nav-bar">
        <div class="logo-container">
            <img src="https://imgur.com/nXbepvg.png" alt="Logo" class="logo">
        </div>
        <div class="centered-text">
            <h1>CAMPANHAS</h1>
        </div>
    </nav>
</header>
<!-- FIM DA PRIMEIRA BARRA DE NAVEGAÇÃO -->

<!-- INÍCIO DA SEGUNDA BARRA DE NAVEGAÇÃO -->
<header class="header-2">
    <nav class="nav-bar-2">
        <div class="nav-list">
            <ul>
                <li class="nav-item"><a href="home.php" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="campanhas.php" class="nav-link">Campanhas</a></li>
                <?php
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
                    echo '<li class="nav-item"><a href="logout.php" class="nav-link">Sair</a></li>';
                } else {
                    echo '<li class="nav-item"><a href="cadastro.php" class="nav-link">Doe Agora</a></li>';
                }
                ?>
            </ul>
        </div>
    </nav>
</header>
<!-- FIM DA SEGUNDA BARRA DE NAVEGAÇÃO -->

<!-- TÍTULO DAS CATEGORIAS -->
<h2 class="categorias-texto">NOSSAS CAMPANHAS</h2>

<!-- INÍCIO DAS CATEGORIAS -->
<section class="categories">
    <div class="category">
        <div class="category-text">
            <h3>RIO GRANDE DO SUL</h3>
            <p>Ajude as famílias necessitadas do Rio Grande do Sul afetadas por desastres naturais.</p>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>
                <a href="form.php"><button class="category-button">Acessar</button></a>
            <?php else : ?>
                <a href="cadastro.php"><button class="category-button">Acessar</button></a>
            <?php endif; ?>
        </div>
        <div class="category-image">
            <img src="https://imgur.com/RkWvxbm.png" alt="Imagem Categoria 1">
        </div>
    </div>

    <div class="category">
        <div class="category-text">
            <h3>ÁFRICA DO SUL</h3>
            <p>Contribua para melhorar as condições de vida das comunidades na África do Sul.</p>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>
                <a href="categoria_africa_do_sul.php"><button class="category-button">Acessar</button></a>
            <?php else : ?>
                <a href="cadastro.php"><button class="category-button">Acessar</button></a>
            <?php endif; ?>
        </div>
        <div class="category-image">
            <img src="https://imgur.com/nu2CDod.png" alt="Imagem Categoria 2">
        </div>
    </div>

    <div class="category">
        <div class="category-text">
            <h3>DOAÇÃO DE SANGUE</h3>
            <p>Participe da campanha de doação de sangue e salve vidas.</p>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) : ?>
                <a href="categoria_doacao_de_sangue.php"><button class="category-button">Acessar</button></a>
            <?php else : ?>
                <a href="cadastro.php"><button class="category-button">Acessar</button></a>
            <?php endif; ?>
        </div>
        <div class="category-image">
            <img src="https://imgur.com/wuwVflW.png" alt="Imagem Categoria 3">
        </div>
    </div>
</section>
<!-- FIM DAS CATEGORIAS -->

<!-- INÍCIO DO RODAPÉ -->
<footer class="rodape">
    <div class="container">
        <div class="linha">
            <div class="rodape-col-1">
                <h3>Baixe o nosso APP</h3>
                <p>Baixe os nossos aplicativo nas melhores plataformas</p>
                <div class="app-logo">
                    <img src="https://imgur.com/P6bJDpr.jpg" alt="">
                    <img src="https://imgur.com/BbekpeC.jpg" alt="">
                </div>
            </div>

            <div class="rodape-col-3">
                <h3>Mais informações</h3>
                <ul>
                    <li>Cupons</li>
                    <li>Blog</li>
                    <li>Política de Privacidade</li>
                    <li>Contatos</li>
                </ul>
            </div>

            <div class="rodape-col-4">
                <h3>Redes Sociais</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Youtube</li>
                    <li>X</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="direitos">
            &#169; Todos os Direitos Reservados.
        </p>
    </div>
</footer>
<!-- FIM DO RODAPÉ -->

</body>
<script src="assets/js/app.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>
