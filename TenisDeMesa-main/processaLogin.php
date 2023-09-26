<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $mysqli = new mysqli("localhost", "seu_usuario", "sua_senha", "seu_banco_de_dados");

    if ($mysqli->connect_error) {
        die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
    }

    $query = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $mysqli->error);
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt->bind_param("ss", $email, $senhaHash);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION["nomeUsuario"] = $nome; 

        header("Location: index.html");
        exit;
    } else {

        echo "Email ou senha incorretos.";
    }


    $stmt->close();
    $mysqli->close();
}
?>