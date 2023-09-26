<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$mysqli = new mysqli("localhost", "root", "", "TenisDeMesa");
$stmt = $mysqli->prepare("INSERT into usuario (nome, email, senha) values(?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $senha);

if($stmt->execute()){
    header("Location: index.html"); exit;
} else {
    echo "Erro no cadastro";
}

