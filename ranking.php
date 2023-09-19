<?php
$mysqli = new mysqli("localhost", "root", "", "TenisDeMesa");
$query = "SELECT * FROM ranking_tenis_de_mesa";
$resultados = $mysqli->query($query);

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
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="./cadastro.html">Cadastro</a></li>
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
                    <td><?= $resultado['id'];?></td>
                    <td><?= $resultado['nacao'];?></td>
                    <td><?= $resultado['nome'];?></td>
                    <td><?= $resultado['pontuacao'];?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <form action="incluirProduto.php" class="form">
            <label for=""></label><input type="text"> 
        </form>
        <?php
            $query
        ?>
    </body>