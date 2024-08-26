<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    // Redirecionar para a página de login se não estiver logado
    header("Location: login.php");
    exit();
}

// Conectar ao banco de dados
$servername = "localhost"; // Host do banco de dados
$username = "root"; // Usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "despertar"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Pegar o email do usuário da sessão
$email = $_SESSION['email'];

// Consultar o banco de dados para obter as informações do usuário
$sql = "SELECT nome, telefone, estado, cidade FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Extrair dados do usuário
    $row = $result->fetch_assoc();
    $nome = $row['nome'];
    $telefone = $row['telefone'];
    $estado = $row['estado'];
    $cidade = $row['cidade'];
} else {
    // Caso não encontre o usuário (situação de erro)
    echo "Erro: Usuário não encontrado.";
    exit();
}

// Fechar conexão com o banco de dados
$conn->close();
?>




<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="recursos/css/cadastro.css">
    <link rel="stylesheet" href="recursos/css/formularioo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="recursos/js/home.js"></script>

    <link rel="icon" href="https://imgur.com/opGHwWY.png" type="image/x-icon">

    <title>FORMULÁRIO</title>

</head>

<body>


    <!------------------------------ INÍCIO DA PRIMEIRA BARRA DE NAVEGAÇÃO ------------------------------>
    <header class="header-1">
        <nav class="nav-bar">
            <div class="logo">
                <img src="#" alt="" width="110px" height="auto">
            </div>

            <div class="nav-title">
                <h1>BEM VINDO</h1>
            </div>

            <div class="icon-container">
                <div class="icon">
                    <a href="login.php" class="btn"><i class="fa-solid fa-user"></i></a>
                </div>
                <div class="icon">
                    <a href="trofeu.php" class="btn"><i class="fa-solid fa-trophy"></i></a>
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




    <div class="main-content">
    <div class="form-container">
        <h2>Formulário de Doação</h2>
        <form action="processa_doacao.php" method="POST" enctype="multipart/form-data" id="form-doacao">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($nome); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" value="<?php echo htmlspecialchars($telefone); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="<?php echo htmlspecialchars($estado); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" value="<?php echo htmlspecialchars($cidade); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="tipo_doacao">Tipo de Doação:</label>
                <select id="tipo_doacao" name="tipo_doacao" required>
                    <option value="">Selecione o tipo de doação</option>
                    <option value="Alimento">Alimento</option>
                    <option value="Roupa">Roupa</option>
                    <option value="Dinheiro">Dinheiro</option>
                </select>
            </div>
            <div class="form-group" id="quantidade-dinheiro" style="display: none;">
                <label for="quantidade">Quantidade a doar:</label>
                <input type="number" id="quantidade" name="quantidade" placeholder="Informe a quantidade de dinheiro">
                <span id="quantidade-error" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição da Doação:</label>
                <textarea id="descricao" name="descricao" rows="4" placeholder="Descreva os detalhes da doação"></textarea>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem da Doação:</label>
                <input type="file" id="imagem" name="imagem">
                <small>Envie uma imagem relacionada à doação (opcional).</small>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-doacao">Doar</button>
            </div>
        </form>
    </div>
</div>

    <script>
        // Event listener para verificar seleção do tipo de doação
        document.getElementById('tipo_doacao').addEventListener('change', function() {
            var quantidadeDinheiro = document.getElementById('quantidade-dinheiro');
            // Exibir o campo de quantidade de dinheiro se a opção "Dinheiro" for selecionada
            quantidadeDinheiro.style.display = this.value === 'Dinheiro' ? 'block' : 'none';
            // Limpar o valor do campo de quantidade ao mudar a opção de doação
            if (this.value !== 'Dinheiro') {
                document.getElementById('quantidade').value = '';
                clearErrorMessage();
            }
        });

        // Event listener para checkbox "Deseja doar dinheiro?"
        document.getElementById('doacao_dinheiro').addEventListener('change', function() {
            var quantidadeDinheiro = document.getElementById('quantidade-dinheiro');
            // Exibir o campo de quantidade de dinheiro se o checkbox estiver marcado
            quantidadeDinheiro.style.display = this.checked ? 'block' : 'none';
            // Limpar o valor do campo de quantidade ao desmarcar o checkbox
            if (!this.checked) {
                document.getElementById('quantidade').value = '';
                clearErrorMessage();
            }
        });

        // Validar entrada no campo de quantidade de dinheiro
        document.getElementById('quantidade').addEventListener('input', function() {
            var quantidade = parseFloat(this.value);
            if (quantidade < 0 || isNaN(quantidade)) {
                displayErrorMessage('Informe uma quantidade válida.');
                this.value = ''; // Limpar o campo
            } else {
                clearErrorMessage();
            }
        });

        // Função para exibir mensagem de erro
        function displayErrorMessage(message) {
            document.getElementById('quantidade-error').textContent = message;
        }

        // Função para limpar mensagem de erro
        function clearErrorMessage() {
            document.getElementById('quantidade-error').textContent = '';
        }

        // Bloquear setas para baixo no campo de quantidade de dinheiro
        document.getElementById('quantidade').addEventListener('keydown', function(e) {
            if (e.key === 'ArrowDown') {
                e.preventDefault();
            }
        });


        document.getElementById('form-doacao').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio padrão do formulário

    // Dados do formulário
    var formData = new FormData(this);

    // Enviar para processa_doacao.php (ação atual)
    fetch('processa_doacao.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro ao enviar dados para processa_doacao.php');
        }
        return response.text();
    })
    .then(data => {
        console.log('Resposta de processa_doacao.php:', data);
        // Aqui você pode exibir uma mensagem de sucesso ou redirecionar o usuário, se necessário
    })
    .catch(error => {
        console.error('Erro:', error);
        // Tratar erro, exibir mensagem, etc.
    });

    // Enviar para novo_arquivo.php (novo destino)
    fetch('novo_arquivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro ao enviar dados para novo_arquivo.php');
        }
        return response.text();
    })
    .then(data => {
        console.log('Resposta de novo_arquivo.php:', data);
        // Aqui você pode exibir uma mensagem de sucesso ou redirecionar o usuário, se necessário
    })
    .catch(error => {
        console.error('Erro:', error);
        // Tratar erro, exibir mensagem, etc.
    });
});
    </script>









</body>

</html>