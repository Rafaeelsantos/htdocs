<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="recursos/css/login.css">

    <link rel="icon" href="https://imgur.com/opGHwWY.png" type="image/x-icon">
</head>

<body>

    <div class="novoMenu">
        <div class="container">
            <div class="navbar2">
                <nav>
                    <ul id="MenuItens">
                    </ul>
                </nav>
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">
            </div>
        </div>
        <hr>
        <br>
    </div>

    <!-- INÍCIO MINHA CONTA-->    

    <div class="minha-conta">
        <div class="container">
            <div class="linha">
                <div class="col-2">
                    <img src="https://imgur.com/opGHwWY.png" alt="" width="70%">
                </div>
                <div class="col-2">
                    <div class="formulario">
                        <div class="btn-form">
                            <span onclick="Entrar()">Entrar</span>
                            <span onclick="Cadastro()">Cadastro</span>
                            <hr id="Indicador">
                        </div>

                        <form action="login.php" method="post" id="EntrarPainel">
                            <input type="email" name="email" id="emailLogin" placeholder="E-mail de Acesso">
                            <input type="password" name="senha" id="senhaLogin" placeholder="Digite sua senha">
                            <button type="submit" name="senEntrar" class="btn"> Entrar </button>
                            <a href="" title="">Esqueceu sua senha?</a>
                        </form>

                        <form action="cadastro.php" method="post" id="CadastroSite">
                            <input type="text" name="nome" id="nomeCadastro" placeholder="Nome Completo">
                            <input type="email" name="email" id="emailCadastro" placeholder="E-mail de Acesso">
                            <input type="password" name="senha" id="senhaCadastro" placeholder="Digite sua senha">
                            <button type="submit" name="sendCad" class="btn"> Cadastre-se </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FIM MINHA CONTA-->    

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
    <!-- FIM RODAPÉ-->

    <script>
    // Função para salvar o email do cliente na memória
    function salvarEmailCliente(event) {
        // Impede o envio do formulário
        event.preventDefault();

        // Seleciona o campo de email pelo ID
        let emailInput = document.getElementById('emailLogin');

        // Obtém o valor inserido no campo de email
        let email = emailInput.value;

        // Salva o email no localStorage
        localStorage.setItem('cliente_email', email);

        // Envia o formulário manualmente após salvar no localStorage
        event.target.submit();
    }

    // Chama a função salvarEmailCliente quando o formulário de Entrar é submetido
    document.getElementById('EntrarPainel').addEventListener('submit', salvarEmailCliente);
</script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="recursos/js/login.js"> </script>
</body>

</html>