<?php
session_start();

// Credenciais do banco de dados
$servername = "localhost";
$username = "root"; // Substitua pelo seu usuário do banco de dados
$password = ""; // Substitua pela sua senha do banco de dados
$dbname = "coracaoemacao"; // Substitua pelo nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $valor = $_POST['valor'];
    $tipo_doacao = $_POST['donation_type'];
    $descricao = $_POST['donation_description'];
    $imagem_doacao = "";

    // Verifica se um arquivo de imagem foi enviado
    if (isset($_FILES['donation_image']) && $_FILES['donation_image']['error'] == 0) {
        $target_dir = "uploads/";
        // Verifica se o diretório existe, se não, cria o diretório
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["donation_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Verifica se o arquivo é uma imagem
        $check = getimagesize($_FILES["donation_image"]["tmp_name"]);
        if ($check !== false) {
            if (move_uploaded_file($_FILES["donation_image"]["tmp_name"], $target_file)) {
                $imagem_doacao = $target_file;
            } else {
                echo "Erro ao fazer upload da imagem.";
                exit();
            }
        } else {
            echo "O arquivo não é uma imagem.";
            exit();
        }
    }

    // SQL para inserir os dados
    $sql = "INSERT INTO doacoes (nome, email, endereco, valor, tipo_doacao, descricao, imagem_doacao) VALUES ('$nome', '$email', '$endereco', '$valor', '$tipo_doacao', '$descricao', '$imagem_doacao')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
                alert("Doação realizada com sucesso!");
                window.location.href = "thank_you.php";
              </script>';
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>