<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="recursos/css/cadastroelogin.css">
  <link rel="icon" href="https://imgur.com/y8GxgSO.png" type="image/x-icon">
  <title>REALIZAR LOGIN</title>
  <style>
    /* Estilos para a caixa de mensagem */
    .caixa-mensagem {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      padding: 10px;
      background-color: #f44336;
      color: #fff;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 9999;
    }

    .caixa-mensagem.sucesso {
      background-color: #4CAF50;
    }

    .caixa-mensagem.show {
      display: block;
    }
  </style>
</head>

<body>

  <!-- Caixa de mensagem -->
  <div id="caixa-mensagem" class="caixa-mensagem"></div>

  <div class="container">
    <!-- INÍCIO LOGO DA PÁGINA -->
    <img src="https://imgur.com/5eEwTAd.png" alt="logo" class="logo">
    <!-- FIM LOGO DA PÁGINA -->

    <!-- INÍCIO DO FORMULÁRIO DE LOGIN -->
    <h2>Login</h2>
    <form id="login" action="clogin.php" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Digite seu email">
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
        <span>Não tem uma conta? <a href="usuariocadastro.php" id="link-cadastro">clique aqui para se cadastrar</a></span>
      </div>
      <div class="form-group">
        <button type="submit" class="btn">Login</button>
      </div>
    </form>
  </div>
  <!-- FIM DO FORMULÁRIO DE LOGIN -->

  <!-- JavaScript para exibir a caixa de mensagem -->
  <script>
    // Função para mostrar a caixa de mensagem
    function mostrarMensagem(tipo, mensagem) {
      var caixaMensagem = document.getElementById('caixa-mensagem');
      caixaMensagem.textContent = mensagem;
      caixaMensagem.className = 'caixa-mensagem ' + tipo + ' show';

      // Esconder a mensagem após 5 segundos
      setTimeout(function () {
        caixaMensagem.classList.remove('show');
      }, 5000); // 5000 milissegundos = 5 segundos
    }

    // Verificar se há mensagem na URL e mostrar a caixa de mensagem se necessário
    window.onload = function () {
      var urlParams = new URLSearchParams(window.location.search);
      var tipoMsg = urlParams.get('msg_tipo');
      var mensagem = urlParams.get('msg');

      if (tipoMsg && mensagem) {
        mostrarMensagem(tipoMsg, mensagem);
      }
    };
  </script>
</body>

</html>
