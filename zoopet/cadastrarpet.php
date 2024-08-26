<?php
session_start();

// Verifica se há sessão de admin ou usuário
if (isset($_SESSION['admin_id'])) {
    $nomeUsuario = $_SESSION['admin_name'];
} elseif (isset($_SESSION['user_id'])) {
    $nomeUsuario = $_SESSION['user_name'];
} else {
    // Caso não haja sessão, redireciona para a página de login
    header("Location: usuariologin.php");
    exit();
}

// Conectar ao banco de dados (substitua com suas credenciais)
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'zoopet';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Verifica se é um usuário comum ou administrador
if (isset($_SESSION['user_id'])) {
    // Query para selecionar dados do usuário logado, incluindo estado e cidade
    $user_id = $_SESSION['user_id']; // Supondo que você armazene o ID do usuário na sessão
    $sql = "SELECT nome, idade, email, telefone, estado, cidade FROM usuarios WHERE id = :user_id";
} elseif (isset($_SESSION['admin_id'])) {
    // Query para selecionar dados do administrador logado, se necessário
    $admin_id = $_SESSION['admin_id']; // Supondo que você armazene o ID do administrador na sessão
    $sql = "SELECT nome, email FROM administradores WHERE id = :admin_id";
} else {
    // Caso não haja sessão de usuário nem de admin, redireciona para o login
    header("Location: usuariologin.php");
    exit();
}

try {
    $stmt = $pdo->prepare($sql);

    if (isset($user_id)) {
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    } elseif (isset($admin_id)) {
        $stmt->bindParam(':admin_id', $admin_id, PDO::PARAM_INT);
    }

    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Agora $user contém os dados do usuário logado, incluindo estado e cidade, ou dados do administrador
} catch (PDOException $e) {
    die("Erro ao buscar dados do usuário ou administrador: " . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="PT-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/cadastrarpet.css">
    <link rel="icon" href="https://imgur.com/y8GxgSO.png" type="image/x-icon">
    <title>ZOOPET</title>
</head>

<body>

    <!--------------------------------------------------------------- INÍCIO DO HEADER ----------------------------------------------------------------->
    <header>
        <div class="logo">
            <img src="https://imgur.com/5eEwTAd.png" alt="Logo">
        </div>
        <nav class="categories">
            <ul>
                <li><a href="inicio.php">INÍCIO</a></li>
                <li><a href="sobrenos.php">SOBRE NÓS</a></li>
                <li><a href="#category3">EMPRESA</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </nav>
        <div class="profile-menu">
            <!-- Ícone de perfil -->
            <a href="meu-perfil.php"><i class="fas fa-user-circle"></i></a>
            <!-- Ícone de menu -->
            <div class="menu-icon" id="menuIcon">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <!----------------------------------------------------------------- FIM DO HEADER ------------------------------------------------------------------->



    <!--------------------------------------------------------------------- SIDEBAR --------------------------------------------------------------------->
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Menu exclusivo para administradores -->
        <?php if (isset($_SESSION['admin_id'])) : ?>
            <a href="javascript:void(0)" class="category">Novos requisitos</a>
            <ul class="subcategory hidden">
                <li><a href="#">Teste</a></li>
            </ul>
        <?php endif; ?>
        <!-- Fim do menu exclusivo para administradores -->

        <a href="javascript:void(0)" class="category">Pets</a>
        <ul class="subcategory hidden">
            <li><a href="#"><img src="https://imgur.com/zH4YYOx.png" alt="Cães">Cães</a></li>
            <li><a href="#"><img src="https://imgur.com/6qCN1SL.png" alt="Gatos">Gatos</a></li>
            <li><a href="#"><img src="https://imgur.com/ov6rggw.png" alt="Pássaros">Pássaros</a></li>
            <li><a href="#"><img src="https://imgur.com/yYBfsfQ.png" alt="Peixes">Peixes</a></li>
            <li><a href="#"><img src="https://imgur.com/LwCDXaL.png" alt="Hamsters">Hamsters</a></li>
            <li><a href="#"><img src="https://imgur.com/mklnTf4.png" alt="Coelhos">Coelhos</a></li>
            <li><a href="#"><img src="https://imgur.com/CYpUt21.png" alt="Porquinho da Índia">Porquinho da Índia</a></li>
            <li><a href="#"><img src="https://imgur.com/Bnm9Hfe.png" alt="Tartaruga">Tartaruga</a></li>
            <li><a href="#"><img src="https://imgur.com/Ryd3IWZ.png" alt="Répteis">Répteis</a></li>
            <li><a href="#"><img src="https://imgur.com/bnL1Nim.png" alt="Áves Exóticas">Áves Exóticas</a></li>
        </ul>

        <a href="javascript:void(0)" class="category">Registrar pet</a>
        <ul class="subcategory hidden">
            <li><a href="cadastrarpet.php"><img src="https://imgur.com/DPQXdhX.png" alt="Registrar">Registrar</a></li>
        </ul>
    </div>
    <!------------------------------------------------------------------ FIM DO SIDEBAR -------------------------------------------------------------------->




    <!--------------------------------------------------------------------INÍCIO TITULO-------------------------------------------------------------------->
    <div class="titulo-centralizado">
        <h1>ÁREA DE REGISTRO DE UM PET</h1>
    </div>
    <!--------------------------------------------------------------------FIM TÍTULO-------------------------------------------------------------------->




    <!--------------------------------------------------------------------INÍCIO CAIXA DE AVISO-------------------------------------------------------------------->
    <div class="aviso">
        <h2 class="aviso-titulo">Aviso Importante: Dicas para Colocar um Animal para Adoção</h2>

        <p><strong>Se você está considerando colocar um animal para adoção, aqui estão algumas orientações importantes para garantir uma adoção responsável e segura:</strong></p>

        <ul class="itens-principais">
            <li><strong>Preparação Completa:</strong> Certifique-se de que o animal esteja saudável, tenha sido vacinado e castrado/esterilizado, se apropriado. Isso aumenta as chances de uma adoção bem-sucedida.</li>

            <li><strong>Descrição Detalhada:</strong> Providencie informações precisas e honestas sobre o temperamento, necessidades especiais e história do animal. Isso ajuda potenciais adotantes a tomar uma decisão informada.</li>
        </ul>
        <ul class="itens-adicionais">
            <li><strong>Fotos de Qualidade:</strong> Tire fotos claras e atraentes do animal. Fotos de boa qualidade podem aumentar significativamente as chances de adoção.</li>
            <li><strong>Vetting de Adotantes:</strong> Realize entrevistas e faça visitas domiciliares para garantir que os potenciais adotantes sejam adequados e capazes de fornecer um lar seguro e amoroso.</li>
            <li><strong>Contrato de Adoção:</strong> Use um contrato de adoção claro e abrangente para estabelecer expectativas mútuas e garantir o bem-estar contínuo do animal.</li>
            <li><strong>Suporte Pós-Adoção:</strong> Ofereça suporte contínuo aos adotantes, seja através de orientação, recomendações veterinárias ou recursos adicionais.</li>
        </ul>
        <a href="#" id="mostrarMais" class="botao">Visualizar mais</a>
    </div>
    <!--------------------------------------------------------------------FIM CAIXA DE AVISO-------------------------------------------------------------------->







    <!--------------------------------------------------------------------INÍCIO DO FORMULÁRIO-------------------------------------------------------------------->
    <div class="container">
        <!--------------------------------------- INÍCIO LOGO DA PÁGINA ---------------------------------------->
        <img src="https://imgur.com/5eEwTAd.png" alt="logo" class="logo">
        <!----------------------------------------- FIM LOGO DA PÁGINA ----------------------------------------->

        <!---------------------------------- INÍCIO DO FORMULÁRIO DE CADASTRO ---------------------------------->
        <h2>Dados do Pet</h2>

        <form id="form-cadastro" action="cadastro_usuario.php" method="POST">
            <div class="form-group">
                <label for="foto1">Foto 1:</label>
                <input type="file" id="foto1" name="foto1" accept="image/*" required placeholder="Selecione uma foto">

                <label for="foto2">Foto 2:</label>
                <input type="file" id="foto2" name="foto2" accept="image/*" required placeholder="Selecione uma foto">

                <label for="foto3">Foto 3:</label>
                <input type="file" id="foto3" name="foto3" accept="image/*" required placeholder="Selecione uma foto">
            </div>

            <div class="form-group">
                <label for="nome_animal">Nome do Animal:</label>
                <input type="text" id="nome_animal" name="nome_animal" required placeholder="Digite o nome do animal">
            </div>

            <div class="form-group">
                <label for="idade_animal">Idade:</label>
                <input type="text" id="idade_animal" name="idade_animal" required placeholder="Digite a idade do animal">
            </div>

            <div class="form-group">
                <label for="especie_animal">Espécie:</label>
                <select id="especie_animal" name="especie_animal" required>
                    <option value="" disabled selected>Selecione a espécie</option>
                    <option value="cães">Cães</option>
                    <option value="gatos">Gatos</option>
                    <option value="pássaros">Pássaros</option>
                    <option value="peixes">Peixes</option>
                    <option value="hamsters">Hamsters</option>
                    <option value="coelhos">Coelhos</option>
                    <option value="porquinho da índia">Porquinho da Índia</option>
                    <option value="tartaruga">Tartaruga</option>
                    <option value="répteis">Répteis</option>
                    <option value="aves exoticas">Aves Exóticas</option>
                </select>
            </div>

            <div class="form-group">
                <label for="raca_animal">Raça:</label>
                <input type="text" id="raca_animal" name="raca_animal" placeholder="Digite a raça (opcional)">
            </div>

            <div class="form-group">
                <label for="sexo_animal">Sexo:</label>
                <select id="sexo_animal" name="sexo_animal" required>
                    <option value="" disabled selected>Selecione o sexo</option>
                    <option value="macho">Macho</option>
                    <option value="fêmea">Fêmea</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data_resgate">Data de Resgate:</label>
                <input type="date" id="data_resgate" name="data_resgate" required placeholder="Selecione a data de resgate">
            </div>

            <div class="form-group">
                <label for="local_resgate">Local de Resgate:</label>
                <input type="text" id="local_resgate" name="local_resgate" value="<?php echo htmlspecialchars($user['estado']); ?>" required readonly placeholder="Estado de resgate">
            </div>

            <div class="form-group">
                <label for="cidade_resgate">Cidade de Resgate:</label>
                <input type="text" id="cidade_resgate" name="cidade_resgate" value="<?php echo htmlspecialchars($user['cidade']); ?>" required readonly placeholder="Cidade de resgate">
            </div>

            <div class="form-group">
                <label for="condicao_saude">Condição de Saúde:</label>
                <textarea id="condicao_saude" name="condicao_saude" rows="4" required placeholder="Descreva a condição de saúde do animal"></textarea>
            </div>

            <div class="form-group">
                <label for="temperamento">Temperamento:</label>
                <textarea id="temperamento" name="temperamento" rows="4" required placeholder="Descreva o temperamento do animal"></textarea>
            </div>

            <div class="form-group">
                <label for="necessidades_especiais">Necessidades Especiais:</label>
                <textarea id="necessidades_especiais" name="necessidades_especiais" rows="4" placeholder="Descreva as necessidades especiais do animal"></textarea>
            </div>

            <h2>Dados do Doador</h2>

            <div class="form-group">
                <label for="nome_doador">Nome:</label>
                <input type="text" id="nome_doador" name="nome_doador" value="<?php echo htmlspecialchars($user['nome']); ?>" required disabled>
            </div>

            <div class="form-group">
                <label for="email_doador">Email:</label>
                <input type="email" id="email_doador" name="email_doador" value="<?php echo htmlspecialchars($user['email']); ?>" required disabled>
            </div>

            <div class="form-group">
                <label for="idade_doador">Idade:</label>
                <input type="text" id="idade_doador" name="idade_doador" value="<?php echo htmlspecialchars($user['idade']); ?>" required disabled>
            </div>

            <div class="form-group">
                <label for="telefone_doador">Telefone:</label>
                <input type="tel" id="telefone_doador" name="telefone_doador" value="<?php echo htmlspecialchars($user['telefone']); ?>" disabled>
            </div>

            <div class="form-group">
                <button type="submit" class="btn">Cadastrar</button>
            </div>
        </form>
    </div>
    <!--------------------------------------------------------------------FIM DO FORMULÁRIO-------------------------------------------------------------------->














    <!------------------------------------------------------------------ INÍCIO DO RODAPÉ ------------------------------------------------------------------>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section contact">
                <h2>Contato</h2>
                <div class="social-icons">
                    <img src="https://imgur.com/gSwpkmQ.png" alt="Facebook">
                    <img src="https://imgur.com/AqwqTph.png" alt="LinkedIn">
                    <img src="https://imgur.com/8h6oFsu.png" alt="Email">
                </div>
            </div>
            <div class="footer-section about">
                <h2>Sobre Nós</h2>
                <p>A ZOOPET é um programa criado para estreitar laços entre pessoas que têm o sonho de adotar um pet e nossas ONGs e protetores parceiros. Vamos juntos incentivar a adoção, conscientizar sobre a posse responsável e fomentar a cultura de doação em prol do bem-estar animal..</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Adoção de Pets | Desenvolvido por ZOOPET</p>
        </div>
    </footer>
    <!------------------------------------------------------------------ FIM DO RODAPÉ ---------------------------------------------------------------------->
    <script src="recursos/js/inicio.js"></script>
    <script src="recursos/js/cadastrarpet.js"></script>
</body>

</html>