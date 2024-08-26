<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="recursos/css/pontuacaoo.css">
    <link rel="stylesheet" href="recursos/css/pontuacaoo2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="recursos/js/home.js"></script>

    <link rel="icon" href="https://imgur.com/opGHwWY.png" type="image/x-icon">

    <title>PONTUAÇÕES</title>

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
                    <a href="meu-perfil.php" class="btn"><i class="fa-solid fa-user"></i></a>
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




<div class="main-content">
    <h2>Pontuação dos Usuários</h2>
    <div class="user-list-container">
        <?php
        // Conectar ao banco de dados
        $servername = "localhost"; // Host do banco de dados (normalmente localhost)
        $username = "root"; // Usuário do banco de dados
        $password = ""; // Senha do banco de dados
        $dbname = "despertar"; // Nome do banco de dados

        // Criar conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Consultar o banco de dados para obter os nomes dos usuários e quantidade de doações, ordenados pela quantidade de doações
        $sql = "SELECT nome, quantidade_doacoes FROM usuarios ORDER BY quantidade_doacoes DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Inicializar contador para número de líderes
            $count = 1;
            // Exibir os nomes dos usuários em uma lista com barras de pontuação e quantidade de doações
            echo "<ul class='user-list'>";
            while ($row = $result->fetch_assoc()) {
                // Simulação de pontuação aleatória para exemplo
                $pontuacao = $row['quantidade_doacoes']; // Pontuação será a quantidade de doações
                echo "<li>";
                // Adicionar ícones de troféu para os primeiros lugares
                if ($count === 1) {
                    echo "<i class='fas fa-trophy' style='color: gold; margin-right: 5px;'></i>"; // Troféu de ouro para o primeiro lugar
                } else if ($count === 2) {
                    echo "<i class='fas fa-trophy' style='color: silver; margin-right: 5px;'></i>"; // Troféu de prata para o segundo lugar
                } else if ($count === 3) {
                    echo "<i class='fas fa-trophy' style='color: #cd7f32; margin-right: 5px;'></i>"; // Troféu de bronze para o terceiro lugar
                } else {
                    echo "<i class='fas fa-trophy invisible-trophy'></i>"; // Ícone invisível para demais posições
                }
                echo "<span class='leaderboard-number'>" . $count . "°</span>"; // Número do líder
                echo "<span class='user-name'>" . $row["nome"] . "</span>";
                echo "<div class='score-bar' style='width: " . $pontuacao * 15 . "px;'></div>"; // Largura da barra de pontuação
                echo "<span class='score-count'>" . $pontuacao . " doações</span>"; // Exibir quantidade de doações
                echo "</li>";
                $count++; // Incrementar o contador
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum usuário encontrado.</p>";
        }

        // Fechar conexão com o banco de dados
        $conn->close();
        ?>
    </div>
</div>







</body>

</html>