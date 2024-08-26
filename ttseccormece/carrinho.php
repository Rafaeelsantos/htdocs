<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARRINHO</title>
    <link rel="stylesheet" href="recursos/css/carrinho.css">

    <link rel="icon" href="https://imgur.com/opGHwWY.png" type="image/x-icon">
</head>

<body>

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

    <!-- INÍCIO CARRINHO DE COMPRAS -->
    <div class="corpo-categorias carrinho-compras">

        <section class="cart-items" id="cart-items">
            <h2>Seu Carrinho de Compras</h2>
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th></th> <!-- Cabeçalho para o botão de remoção -->
                    </tr>
                </thead>
                <tbody id="pedido-table-body">
                    <!-- Os pedidos serão adicionados aqui -->
                </tbody>
            </table>
            <div class="total-price" id="total-price"></div>
            <button class="checkout-button" onclick="finalizarPedido()">Continuar para Finalizar o Pedido</button>
        </section>


        <!-- INÍCIO RODAPÉ-->
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

                <div class="rodape-col-2">
                    <p>orem Ipum is sleply dumy text of th</p>
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
                &#169; Todos os Direitos Reservados. DTEC 2024.
            </p>

        </div>

    </footer>
        <!-- FIM RODAPÉ-->

        <script>
            // Função para carregar os pedidos do localStorage
            function carregarPedidos() {
                const tableBody = document.getElementById('pedido-table-body');
                const totalPrice = document.getElementById('total-price');

                let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
                let totalPriceValue = 0;

                tableBody.innerHTML = '';

                pedidos.forEach((pedido, index) => {
                    totalPriceValue += parseFloat(pedido.preco);
                    const row = tableBody.insertRow();
                    const cellNome = row.insertCell(0);
                    const cellPreco = row.insertCell(1);
                    const cellRemover = row.insertCell(2); // Célula para o botão de remoção

                    cellNome.textContent = pedido.nome;
                    cellPreco.textContent = `R$ ${pedido.preco}`;

                    // Botão de remoção
                    const removeButton = document.createElement('button');
                    removeButton.textContent = 'Remover';
                    removeButton.onclick = () => removerProduto(index); // Chama a função para remover o produto com o índice correspondente
                    cellRemover.appendChild(removeButton);
                });

                totalPrice.textContent = `Total: R$ ${totalPriceValue.toFixed(2)}`;
            }

            // Função para remover o produto do carrinho
            function removerProduto(index) {
                let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
                pedidos.splice(index, 1); // Remove o produto com o índice especificado
                localStorage.setItem('pedidos', JSON.stringify(pedidos));
                carregarPedidos(); // Recarrega a lista de pedidos
            }

            // Função para finalizar o pedido
            // Variável para armazenar temporariamente os pedidos
            let carrinhoTemporario = JSON.parse(localStorage.getItem('pedidos')) || [];

            // Função para finalizar o pedido
            function finalizarPedido() {
                let pedidos = carrinhoTemporario;

                // Verifica se há pedidos para finalizar
                if (pedidos.length > 0) {
                    // Atualiza o localStorage com os pedidos
                    localStorage.setItem('pedidos', JSON.stringify(pedidos));

                    // Redireciona para a página minha-conta.php
                    window.location.href = 'login.php';
                } else {
                    // Exibe uma mensagem se não houver pedidos para finalizar
                    alert('Não há itens no carrinho.');
                }
            }

            // Chamando a função para carregar os pedidos ao carregar a página
            window.onload = carregarPedidos;
        </script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="assets/js/app.js