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
            <a class="navbar-brand" href="#!">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="./index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="./cadastro.php">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Torneios</a></li>
                    <li class="nav-item"><a class="nav-link" href="./ranking.php">Ranking</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid align-items-center justify-content-center">
        <div class="container py-5">
            <form action="incluiUsuario.php" class="form" method="post">
                <div class="form-input"><label for="Nome">Nome</label><input id="nome" name="nome" class="form-control" type="text"></div>
                <div class="form-input"><label for="Email">E-mail</label><input id="email" name="email" class="form-control" type="email"></div>
                <div class="form-input"><label for="Senha">Senha</label><input id="senha" name="senha" class="form-control" type="password"></div> <br>
                <button class="btn btn-danger" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

    <script src="js/scripts.js"></script>
</body>