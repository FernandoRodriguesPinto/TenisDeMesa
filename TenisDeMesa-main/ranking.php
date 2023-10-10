<?php
session_start(); 
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>	
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Ranking</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Torneios</a></li>
                        <li class="nav-item"><a class="nav-link  active" href="#!">Ranking</a></li>
                        <li class="nav-item"><a class="nav-link" href="./ranking.php"></a></li>
                        <?php
                        if(isset($_SESSION['nomeUsuario'])){ ?>
                        <li class="nav-item">
                            <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= $_SESSION['nomeUsuario'] ?>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="./sair.php">Sair da conta</a></li>
                            </ul>
                            </div>
                        </li>

                        <?php }else { ?>
                        <li class="nav-item"><a class="nav-link" href="./cadastro.php">Cadastro</a></li>
                        
                        <?php } ?>
                        <li class="nav-item"><a class="nav-link" href="./ranking.php"></a></li>
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
        <form action="incluirRanking.php" class="form" method="POST">
            <div class="form-input"><label for="Nacao">Nação</label><input id="Nacao" class="form-control" type="text" name="nacao"></div>
            <div class="form-input"><label for="Nome">Nome</label><input id="Nome" class="form-control" type="text" name="nome"></div>
            <div class="form-input"><label for="Pontuacao">Pontuação</label><input id="Pontuacao" class="form-control" type="text" name="pontuacao"></div> <br>
            <button class="btn btn-danger" type="submit">Adicionar</button>
        </form>
        </div>
        <div class="container py-5">
            <form action="removerRanking.php" method="POST">
                <div class="form-group">
                    <label for="itemARemover">Selecione o item a ser removido:</label>
                    <select id="itemARemover" class="form-control" name="idItemARemover">
                        <?php foreach ($resultados as $resultado) { ?>
                            <option value="<?= $resultado['id']; ?>">
                                <?= $resultado['nome']; ?> (<?= $resultado['nacao']; ?>)
                            </option>
                        <?php } ?>
                    </select>
                </div> <br> 
                <button class="btn btn-danger" type="submit">Remover</button>
            </form>
        </div>

    </body>