<?php
$mysqli = new mysqli("localhost", "root", "", "TenisDeMesa");
$query = "SELECT * FROM ranking_tenis_de_mesa ORDER BY pontuacao DESC";
$resultados = $mysqli->query($query);
$i = 1;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tênis de Mesa - IFSP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/778957.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Ranking</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="./cadastroUsuario.php">Cadastro</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Torneios</a></li>
                        <li class="nav-item"><a class="nav-link  active" href="#!">Ranking</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <hr class="invisible">
        <div class="container d-flex justify-content-center">
            <table class="table table-bordered table-hover" >
                <thead class="table-dark">
                    <th>Posição</th>
                    <th>Nação</th>
                    <th>Nome</th>
                    <th>Pontuação</th>
                </thead>
                <tbody>
                    <?php foreach($resultados as $resultado){ ?>
                    <tr>
                    <td><?= $i;?></td>
                    <td><?= $resultado['nacao'];?></td>
                    <td><?= $resultado['nome'];?></td>
                    <td><?= $resultado['pontuacao'];?></td>
                    </tr>
                    <?php 
                $i++;} ?>
                </tbody>
            </table>
        </div>
        <div class="container py-5">
            <form action="incluirProduto.php" class="form">
                <div class="form-input"><label for="Nacao">Nação</label><input id="Nacao" class="form-control" type="text"></div>
                <div class="form-input"><label for="Nome">Nome</label><input id="Nome" class="form-control" type="text"></div>
                <div class="form-input"><label for="Pontuacao">Pontuação</label><input id="Pontuacao" class="form-control" type="text"></div> <br>
                <button class="btn btn-danger" type="submit">Adicionar</button>
            </form>
        </div>
        <?php
            $query
        ?>
    </body>