<?php
// Conectar ao banco de dados
$servername = "localhost"; // Host do banco de dados (normalmente localhost)
$username = "root"; // Usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "despertar"; // Nome do banco de dados

// Capturar o email do formulário
$email = $_POST['email'];

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o email existe na tabela usuarios
$sql = "SELECT id, quantidade_doacoes FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Atualizar a quantidade de doações para o usuário
    $row = $result->fetch_assoc();
    $id_usuario = $row['id'];
    $quantidade_doacoes = $row['quantidade_doacoes'];

    // Incrementar a quantidade de doações
    $quantidade_doacoes++;

    // Atualizar no banco de dados
    $sql_update = "UPDATE usuarios SET quantidade_doacoes = $quantidade_doacoes WHERE id = $id_usuario";

    if ($conn->query($sql_update) === TRUE) {
    } else {
        echo "Erro ao registrar a doação: " . $conn->error;
    }
} else {
    echo "Usuário não encontrado.";
}

// Fechar conexão com o banco de dados
$conn->close();
?>


<?php
// Dados do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "despertar";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Preparar os dados recebidos do formulário (certifique-se de validar e sanitizar os dados)
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$tipo_doacao = $_POST['tipo_doacao'];
$quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : null;
$descricao = $_POST['descricao'];
$imagem = $_FILES['imagem']['name'];

// Upload da imagem, se fornecida
$target_dir = "imagem/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
    // Query SQL para inserir os dados na tabela "doacoes"
    $sql = "INSERT INTO doacoes (nome, email, telefone, estado, cidade, tipo_doacao, quantidade, descricao, imagem) 
            VALUES ('$nome', '$email', '$telefone', '$estado', '$cidade', '$tipo_doacao', '$quantidade', '$descricao', '$imagem')";

    if ($conn->query($sql) === TRUE) {
        // Fechar conexão com o banco de dados
        $conn->close();
        // Exibir mensagem de sucesso
        echo "<script>alert('Doação registrada com sucesso!'); window.location.href = 'inicio.php';</script>";
        exit; // Encerra o script após redirecionamento
    } else {
        // Exibir mensagem de erro
        echo "Erro ao registrar a doação: " . $conn->error;
    }
} else {
    // Exibir mensagem de erro de upload de arquivo
    echo "Erro ao enviar arquivo.";
}

// Fechar conexão com o banco de dados
$conn->close();
?>
