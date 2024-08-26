<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['email'])) {
    // Redirecionar para a página de login se não estiver logado
    header("Location: login.php");
    exit();
}

// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "despertar";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recuperar o email da sessão
$email = $_SESSION['email'];

// Consultar o banco de dados para obter as informações do usuário
$sql_usuario = "SELECT * FROM usuarios WHERE email = '$email'";
$result_usuario = $conn->query($sql_usuario);

if ($result_usuario->num_rows > 0) {
    // Exibir as informações do usuário
    $row_usuario = $result_usuario->fetch_assoc();
    $nome = $row_usuario['nome'];
    $telefone = $row_usuario['telefone'];
    $estado = $row_usuario['estado'];
    $cidade = $row_usuario['cidade'];

    // Consultar o banco de dados para obter o histórico de doações do usuário
    $sql_doacoes = "SELECT * FROM doacoes WHERE email = '$email'";
    $result_doacoes = $conn->query($sql_doacoes);

    // Fechar conexão com o banco de dados
    $conn->close();

    // Exibir as informações do usuário e doações
?>






    <!DOCTYPE html>
    <html lang="PT-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="recursos/css/inicio.css">
        <link rel="stylesheet" href="recursos/css/meu-perfil.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <link rel="icon" href="https://imgur.com/opGHwWY.png" type="image/x-icon">

        <title>CADASTRO</title>

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
                        <a href="logout.php" class="btn"><i class="fa-solid fa-door-open"></i></a>
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
                        <li class="nav-item"><a href="inicio.php" class="nav-link">Início</a></li>
                        <li class="nav-item"><a href="empresa.php" class="nav-link">Empresa</a></li>
                        <li class="nav-item"><a href="contatos.php" class="nav-link">Contatos</a></li>
                        <li class="nav-item"><a href="pontuacao.php" class="nav-link">Rancking</a></li>
                    </ul>
                </div>

            </nav>
        </header>
        <!--------------------------------- FIM DA SEGUNDA BARRA DE NAVEGAÇÃO --------------------------------->

        <div class="container">
            <div class="profile-container">
                <h1>Bem-vindo, <?php echo $nome; ?>!</h1>
                <p>Telefone: <?php echo $telefone; ?></p>
                <p>Estado: <?php echo $estado; ?></p>
                <p>Cidade: <?php echo $cidade; ?></p>
            </div>

            <!-- Histórico de Doações -->
            <?php if ($result_doacoes->num_rows > 0) : ?>
                <div class="donation-history">
                    <h2>Histórico de Doações</h2>
                    <div class="card-container">
                        <?php while ($row_doacao = $result_doacoes->fetch_assoc()) : ?>
                            <div class="card">
                                <p><strong>Tipo de Doação:</strong> <?php echo $row_doacao['tipo_doacao']; ?></p>
                                <p><strong>Data da Doação:</strong> <?php echo date('d/m/Y', strtotime($row_doacao['data_doacao'])); ?></p>
                                <p><strong>Quantidade:</strong> <?php echo $row_doacao['quantidade']; ?></p>
                                <p><strong>Descrição:</strong> <?php echo $row_doacao['descricao']; ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php else : ?>
                <p>Ainda não há registros de doações.</p>
            <?php endif; ?>
        </div>
    </body>

    </html>
<?php
} else {
    echo "Erro ao carregar as informações do usuário.";
}
?>





</body>

</html>