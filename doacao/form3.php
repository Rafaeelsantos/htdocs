<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="recursos/css/form.css">

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
                <h1>AJUDE COM SUA DOAÇÃO DE SANGUE</h1>
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
                    <li class="nav-item"><a href="login.php" class="nav-link">Doe Agora</a></li>
                </ul>
            </div>

        </nav>
    </header>
    <!--------------------------------- FIM DA SEGUNDA BARRA DE NAVEGAÇÃO --------------------------------->






    <h2 class="categorias-texto">AJUDE COM SUAS DOAÇÕES</h2>







    <div class="container-principal">
        <div class="secao-doacoes">
            <div class="imagem-doacao">
                <img src="https://imgur.com/zk9FjVT.png" alt="Imagem de Doação" width="600" height="auto">
            </div>
            <div class="texto-doacao">
                <h1>Campanha de Doação de Sangue: Vida em Cada Gota</h1>
                <p>
                <h3>Objetivos:</h3>Aumentar a conscientização sobre a doação de sangue, educar a população sobre a importância
                vital da doação regular de sangue para garantir tratamentos médicos eficazes e emergências.
                </p>
                </br>

                <p>
                <h3>Para quem:</h3>Esta campanha é destinada a todos os cidadãos e residentes que estão aptos e dispostos a doar sangue,
                independentemente de idade, gênero ou condição socioeconômica
                </p>
                </br>

                <p>
                <h3>Local que irá a doação:</h3>As doações de sangue serão coletadas em centros de doação de sangue,
                hospitais e unidades móveis localizadas em diversas comunidades, garantindo conveniência e acessibilidade para
                todos os potenciais doadores interessados em participar desta ação de solidariedade e salvação de vidas.
                </p>

            </div>
        </div>
        <!-- Linha Divisória -->
        <hr class="linha-divisoria">
    </div>

    <!-- Contêiner do Formulário de Doação -->
    <div class="form-container">
        <div class="form-wrapper">
            <form class="form-doacao" action="cadastro2.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" placeholder="Endereço" required>
                </div>
                <div class="form-group">
                    <label for="valor">Valor da Doação:</label>
                    <input type="number" id="valor" name="valor" min="1" placeholder="Valor da Doação" required>
                </div>
                <div class="form-group">
                    <label for="donation-type">Tipo de doação:</label><br>
                    <select id="donation-type" name="donation_type" required>
                        <option value="financeira">Financeira</option>
                        <option value="alimentos">Alimentos</option>
                        <option value="roupas">Roupas</option>
                        <option value="outros">Outros</option>
                    </select><br><br>
                </div>
                <div class="form-group">
                    <label for="donation-description">Descrição:</label><br>
                    <textarea id="donation-description" name="donation_description" rows="4" placeholder="Descrição sobre o item da doação" required></textarea><br><br>
                </div>
                <div class="form-group">
                    <label for="donation-image">Imagem da doação:</label><br>
                    <input type="file" id="donation-image" name="donation_image"><br><br>
                </div>
                <div class="form-group">
                    <button type="submit">Enviar Doação</button>
                </div>
            </form>
        </div>
    </div>





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