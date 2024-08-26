<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="recursos/css/ver-produtos.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="recursos/js/home.js"></script>

    <link rel="icon" href="https://imgur.com/opGHwWY.png" type="image/x-icon">

    <title>TTS (JAQUETA ADIDAS)</title>

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

    <!-- INÍCIO PRODUTOS DETALHES alter 4 incluir esta classe -->
    <div class="corpo-categorias ver-produto">
        <div class="linha">


            <div class="col-2">
                <img src="https://imgur.com/qa4aVBm.png" alt="" id="produtoImg2">
            </div>

            <div class="col-2">
                <h1>Jaqueta Adidas</h1>
                <h4>R$ 55,90 </h4>
                <form action="" method="post">


                    <select name="" id="">
                        <option value="">Selecione o Tamanho</option>
                        <option value="">P</option>
                        <option value="">M</option>
                        <option value="">G</option>
                        <option value="">GG</option>
                    </select>
                    <br>

                    <button class="btn" onclick="adicionarAoCarrinho('Corta Vento Adidas',55.90)">Adicionar ao
                        Carrinho</button>


                </form>


                <h3 class="descricao">Descrição:</h3>
                <p>Jaqueta Adidas</p>
            </div>


        </div>
    </div>

    <!-- FIM PRODUTOS DETALHES -->


    <!-- INÍCIO TÍTULO PRODUTOS PRODUTOS DETALHES alter 4 incluir esta classe -->
    <div class="corpo-categorias-2">
        <div class="linha linha2">
            <h2>Produtos Relacionados</h2>
            <p>Veja Mais</p>


        </div>
    </div>
    <!-- FIM TÍTULO PRODUTOS DETALHES -->




    <!-- INÍCIO PRODUTOS EM DESTAQUE alter 2 mudar de todo para produtos relacionados e tirar o combo + comprados-->
    <div class="corpo-categorias-2">


        <!-- INÍCIO LINHA CORPO PRODUTOS EM DESTAQUE-->


        <!-- alter 1.. deixar apenas 1 produto-->
        <div class="linha">


            <!-- INÍCIO ITEM PRODUTO-->


            <div class="col-4-1">
                <a href="jaqueta-de-couro-feminina.php"><img src="https://imgur.com/msWYIen.jpg" alt=""
                        height="200"></a>

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
                <a href="jaqueta-bobojaco.php"><img src="https://imgur.com/qxJiCUT.png" alt="" height="220"></a>

                <a class="texto-link" href="jaqueta-bobojaco.php">
                    <h4>Jaqueta Bobojaco</h4>
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

            <!-- FIM ITEM PRODUTO-->


            <!-- FIM ITEM PRODUTO-->




        </div>
        <!-- FIM LINHA CORPO PRODUTOS EM DESTAQUE-->


    </div>
    <!-- FIM PRODUTOS EM DESTAQUE alter 3 -- retirar paginação -->






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


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/app.js"> </script>
</body>

<script>
    function adicionarAoCarrinho(name, price) {
        const pedido = {
            nome: name,
            preco: price,
        };

        // Armazenar os dados do pedido em localStorage
        let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
        pedidos.push(pedido);
        localStorage.setItem('pedidos', JSON.stringify(pedidos));

        // Redirecionar para a página do carrinho
        window.location.href = 'carrinho.php';
    }
</script>

</html>