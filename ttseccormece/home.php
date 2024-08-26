<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="recursos/css/home.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="recursos/js/home.js"></script>

    <link rel="icon" href="https://imgur.com/opGHwWY.png" type="image/x-icon">

    <title>TTS</title>

</head>

<body>


    <!------------------------------ INÍCIO DA PRIMEIRA BARRA DE NAVEGAÇÃO ------------------------------>
    <header class="header-1">
        <nav class="nav-bar">

            <div class="logo">
                <img src="https://imgur.com/opGHwWY.png" alt="" width="110px" height="auto">
            </div>

            <div class="button-container">
                <div class="car-button">
                    <button><a href="carrinho.php" class="btn"><i class="fa-solid fa-cart-shopping"></i></a></button>
                </div>
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
                    <li class="nav-item"><a href="produtos.php" class="nav-link">Produtos</a></li>
                    <li class="nav-item"><a href="empresa.php" class="nav-link">Empresa</a></li>
                    <li class="nav-item"><a href="contatos.php" class="nav-link">Contatos</a></li>
                </ul>
            </div>

        </nav>
    </header>
    <!--------------------------------- FIM DA SEGUNDA BARRA DE NAVEGAÇÃO --------------------------------->




    <h2 class="categorias-texto"> CONFIRA AS NOSSAS CATEGORIAS</h2>



    <!---------------------------------- INÍCIO DAS IMAGENS CATEGORIAS ---------------------------------->
    <div class="imagens-container">

        <div class="image-container">
            <a href="calcas-categorias.php"><img src="https://imgur.com/Q67vQ3F.png" alt="Imagem 1"></a>
            <a href="calcas-categorias.php">
                <div class="texto">CALÇAS</div>
            </a>
        </div>

        <div class="image-container">
            <a href="moletom-categoria.php"><img src="https://imgur.com/EvNNdwl.png" alt="Imagem 2"></a>
            <a href="moletom-categoria.php">
                <div class="texto">MOLETOM</div>
            </a>
        </div>

        <div class="image-container">
            <a href="acessorios-categorias.php"><img src="https://imgur.com/eVN4l2r.png" alt="Imagem 3"></a>
            <a href="acessorios-categorias.php">
                <div class="texto">ACESSÓRIOS</div>
            </a>
        </div>

        <div class="image-container">
            <a href="calcados-categorias.php"><img src="https://imgur.com/MOTsAYP.png" alt="Imagem 4"></a>
            <a href="calcados-categorias.php">
                <div class="texto">CALÇADOS</div>
            </a>
        </div>

    </div>
    <!------------------------------------ FIM DA IMAGENS CATEGORIAS ------------------------------------>



    <!----------------------------------- INÍCIO PRODUTOS EM DESTAQUE ----------------------------------->
    <div class="corpo-categorias-2">
        <h2 class="titulo">Produtos em Destaque</h2>

        <div class="linha">

            <div class="col-4">
                <img src="https://imgur.com/QB6kUuh.jpg" alt="" width="150" height="260">

                <h4>Calça Cargo</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 50,90</p>
            </div>

            <div class="col-4">
                <img src="https://imgur.com/61JjWyS.jpg" alt="" width="200" height="260">

                <h4>Jaqueta Jeans</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 20,00</p>
            </div>

            <div class="col-4">
                <img src="https://imgur.com/i8INZvb.jpg" alt="" width="200" height="260">

                <h4>Adidas Campus</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 110,00</p>
            </div>

            <div class="col-4">
                <img src="https://imgur.com/cJ7Fh0V.jpg" alt="" width="200" height="260">

                <h4>Cropped e Short</h4>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 45,90</p>
            </div>

        </div>

    </div>
    <!------------------------------------ FIM PRODUTOS EM DESTAQUE ------------------------------------>



    <!----------------------------------- INÍCIO LINHA NOVOS PRODUTOS ----------------------------------->
    <div class="corpo-categorias">
        <h2 class="titulo">Novos Produtos</h2>

        <div class="linha">

            <div class="col-4-1">
                <a href="jaqueta-de-baseball.php"><img src="https://imgur.com/HuJuDvW.jpg" alt="" height="220"></a>

                <a class="texto-link" href="jaqueta-de-baseball.php">
                    <h4>Jaqueta de Baseball</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 39,90</p>
            </div>

            <div class="col-4-1">
                <a href="qix-chorao.php"><img src="https://imgur.com/X7Q4Jv9.jpg" alt="" height="220"></a>

                <a class="texto-link" href="qix-chorao.php">
                    <h4>QIX Chorão</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 150,90</p>
            </div>

            <div class="col-4-1">
                <a href="calca-wid-leg.php"><img src="https://imgur.com/FT5U85R.jpg" alt="" height="220"></a>

                <a class="texto-link" href="calca-wid-leg.php">
                    <h4>Calça Wid Leg</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 40,00</p>
            </div>

            <div class="col-4-1">
                <a href="pulseira-feminina.php"><img src="https://imgur.com/Mi9ZX3v.jpg" alt="" height="220"></a>

                <a class="texto-link" href="pulseira-feminina.php">
                    <h4>Pulseira Feminina</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 15,00</p>
            </div>

            <div class="col-4-1">
                <a href="calca-moletom-nike.php"><img src="https://imgur.com/oc7kxIs.jpg" alt="" height="220"></a>

                <a class="texto-link" href="calca-moletom-nike.php">
                    <h4>Calça Moletom Nike</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 29,90</p>
            </div>

            <div class="col-4-1">
                <a href="all-star-feminino.php"><img src="https://imgur.com/MtYQdKI.jpg" alt="" height="220"></a>

                <a class="texto-link" href="all-star-feminino.php">
                    <h4>All Star Feminino</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 70,00</p>
            </div>

            <div class="col-4-1">
                <a href="jaqueta-de-couro-feminina.php"><img src="https://imgur.com/msWYIen.jpg" alt=""
                        height="220"></a>

                <a class="texto-link" href="jaqueta-de-couro-feminina.php">
                    <h4>Jaqueta de Couro</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 50,00</p>
            </div>

            <div class="col-4-1">
                <a href="relogio-de-ponteiro.php"><img src="https://imgur.com/eMDfSFm.jpg" alt="" height="220"></a>

                <a class="texto-link" href="relogio-de-ponteiro.php">
                    <h4>Relógio de Ponteiro</h4>
                </a>
                <div class="classificacao">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                </div>

                <p>R$ 20,00</p>
            </div>

        </div>

    </div>
    <!------------------------------------ FIM LINHA NOVOS PRODUTOS ------------------------------------>



   

    <!------------------------------------------- INÍCIO MARCAS ------------------------------------------->
    <div class="marcas">

        <div class="corpo-categoria">
            <div class="linha">

                <div class="col-5">
                    <a href="https://www.lojasrenner.com.br/"><img src="https://imgur.com/Z1YSnUr.jpg" alt=""
                            width="160px" height="auto"></a>
                </div>

                <div class="col-5">
                    <a
                        href="https://www.cea.com.br/?_gl=1*nz9tdn*_up*MQ..&gclid=CjwKCAjwrcKxBhBMEiwAIVF8rIkLyAClRYb9o3i0MyTKbHWHF7esWe_qE3IBDhqpi7BxXl3BfdJgCxoCOo0QAvD_BwE"><img
                            src="https://imgur.com/AltkjCN.jpg" alt="" width="160px" height="155px"></a>
                </div>

                <div class="col-5">
                    <a href="https://www.nike.com.br/"><img src="https://imgur.com/SH6yW0E.jpg" alt="" width="200px"
                            height="130px"></a>
                </div>

            </div>
        </div>
    </div>
    <!---------------------------------------------- FIM MARCAS ---------------------------------------------->



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
                &#169; Todos os Direitos Reservados. TTS 2024.
            </p>

        </div>

    </footer>
    <!-------------------------------------------- FIM RODAPÉ -------------------------------------------->



</body>

<script src="assets/js/app.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>