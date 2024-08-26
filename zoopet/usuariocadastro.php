<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="recursos/css/cadastroelogin.css">
  <link rel="icon" href="https://imgur.com/y8GxgSO.png" type="image/x-icon">
  <title>REALIZAR CADASTRO</title>


  
  <style>
    /* Estilos para a caixa de mensagem */
    .caixa-mensagem {
      display: none;
      position: fixed;
      top: 0; /* Posição no topo */
      left: 0;
      width: 100%; /* Largura total */
      padding: 10px;
      background-color: #f44336; /* Cor de fundo */
      color: #fff; /* Cor do texto */
      text-align: center; /* Centralizar texto */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
      z-index: 9999; /* Z-index alto para estar acima de outros elementos */
    }

    .caixa-mensagem.sucesso {
      background-color: #4CAF50; /* Cor de fundo para sucesso */
    }

    .caixa-mensagem.show {
      display: block; /* Mostrar a caixa de mensagem */
    }
  </style>



</head>

<body>

  <!-- Caixa de mensagem -->
  <div id="caixa-mensagem" class="caixa-mensagem"></div>

  <div class="container">
    <!--------------------------------------- INÍCIO LOGO DA PÁGINA ---------------------------------------->
    <img src="https://imgur.com/5eEwTAd.png" alt="logo" class="logo">
    <!----------------------------------------- FIM LOGO DA PÁGINA ----------------------------------------->

    <!---------------------------------- INÍCIO DO FORMULÁRIO DE CADASTRO ---------------------------------->
    <h2>Cadastre-se</h2>

    <form id="form-cadastro" action="cadastro_usuario.php" method="POST">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required placeholder="Digite seu nome">
      </div>
      <div class="form-group">
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required placeholder="Digite sua idade" min="18">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Digite seu email">
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required placeholder="Digite seu telefone">
      </div>
      <div class="form-group">
        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
          <option value="" disabled selected>Selecione...</option>
          <option value="SP">São Paulo</option>
        </select>
      </div>
      <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required placeholder="Digite sua cidade">
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required placeholder="Digite sua senha" minlength="4">
        <span>Já tem uma conta? <a href="usuariologin.php" id="link-login">clique aqui para acessar</a></span>
      </div>
      <div class="form-group">
        <button type="submit" class="btn">Cadastrar</button>
      </div>
    </form>
  </div>

  <!-- JavaScript para exibir a caixa de mensagem -->
  <script>
    // Função para mostrar a caixa de mensagem
    function mostrarMensagem(tipo, mensagem) {
      var caixaMensagem = document.getElementById('caixa-mensagem');
      caixaMensagem.textContent = mensagem;
      caixaMensagem.className = 'caixa-mensagem ' + tipo + ' show';

      // Esconder a mensagem após 5 segundos
      setTimeout(function() {
        caixaMensagem.classList.remove('show');
      }, 5000); // 5000 milissegundos = 5 segundos
    }

    // Verificar se há mensagem na URL e mostrar a caixa de mensagem se necessário
    window.onload = function() {
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
