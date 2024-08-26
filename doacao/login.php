<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="recursos/css/loginn.css">
    <link rel="stylesheet" href="recursos/css/home.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="recursos/js/home.js"></script>

    <link rel="icon" href="https://imgur.com/nXbepvg.png" type="image/x-icon">

    <title>Doações Solidárias</title>

</head>

<body>


<!------------------------------ INÍCIO DA PRIMEIRA BARRA DE NAVEGAÇÃO ------------------------------>
<header class="header-1">
    <nav class="nav-bar">
        <div class="logo-container">
            <img src="https://imgur.com/nXbepvg.png" alt="Logo" class="logo">
        </div>
        <div class="centered-text">
            <h1>Bem-vindo ao Doações Solidárias</h1>
        </div>
    </nav>
</header>
<!-------------------------------- FIM DA PRIMEIRA BARRA DE NAVEGAÇÃO -------------------------------->





    <!------------------------------- INÍCIO DA SEGUNDA BARRA DE NAVEGAÇÃO ------------------------------->
    <header class="header-2">
        <nav class="nav-bar-2">

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="home.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="campanhas.php" class="nav-link">Campanhas</a></li>
                    <li class="nav-item"><a href="cadastro.php" class="nav-link">Doe Agora</a></li>
                </ul>
            </div>

        </nav>
    </header>
    <!--------------------------------- FIM DA SEGUNDA BARRA DE NAVEGAÇÃO --------------------------------->







    <main>
    <section class="login-form">
        <h2>Faça seu Login</h2>
        <form action="login1.php" method="POST">
            <label for="user_type">Tipo de Usuário:</label>
            <select id="user_type" name="user_type" required>
                <option value="citizen">Cidadão</option>
                <option value="institution">Instituição</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" class="btn">Login</button>
        </form>
    </section>
</main>






    <!--------------------------------------------- INÍCIO RODAPÉ --------------------------------------------->
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
    <!-------------------------------------------- FIM RODAPÉ -------------------------------------------->



</body>

<script src="assets/js/app.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>