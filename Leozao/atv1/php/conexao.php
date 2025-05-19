<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $sexo = $_POST["sexo"];

    // Configurações do banco de dados
    $servername = "localhost"; // Nome do servidor
    $username = "Leozao"; // Nome de usuário do banco de dados
    $password = "1234"; // Senha do banco de dados
    $dbname = "Leozao"; // Nome do banco de dados

    // Conexão com o banco de dados
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica se a conexão falhou
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    } else {
        echo "Conexão bem-sucedida!<br>";
    }

    // Insere os dados na tabela
    $sql = "INSERT INTO usuarios (nome, sobrenome, sexo) VALUES ('$nome', '$sobrenome', '$sexo')";

    if (mysqli_query($conn, $sql)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conn);
    }

    // Fecha a conexão
    mysqli_close($conn);
}
?>