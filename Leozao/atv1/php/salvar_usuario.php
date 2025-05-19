<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Simular salvamento no banco de dados
        echo "<p>Conta criada com sucesso!</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
    } else {
        echo "<p>Método inválido. Use o formulário para criar uma conta.</p>";
    }
?>
