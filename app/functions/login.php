<?php
    include("conexao.php");
   // include ("../controllers/ControllerLogin.php");
    /*
     abaixo possivel implementação senha segura com criptografia
   $senha = "86873413";
   $options = ['cost'=>12];
   $senhaSegura = password_hash($senha, PASSWORD_DEFAULT,$options);
    echo $senhaSegura;
    */
    ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!--  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet" href="/public/css/login.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<html lang="pt-br">
<head>
    <title> Login Page</title>
</head>
<body>
<!-- abaixo container de navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary " >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">AutenticationSystem</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Admin Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- abaixo container de formulario de login -->
        <div style="height: 60%; margin-top: 10%;">
        <div class="container-sm">
            <form action="../AutenticationWebVoxline/app/functions/loginValidate.php" method="post">
                <h1>Faça o Login Abaixo </h1>
                <input class="form-control" type="text"  id="email" name="email" placeholder="Email" aria-label="default input example">
                <br>
                <input class="form-control" type="text"  id="senha" name="senha" placeholder="Senha" aria-label="default input example">
                <br>
                <button type="submit" class="btn btn-success btn-lg" value="enviar" name="enviar">Enviar</button>
        </div>
        </div>
        <!-- abaixo rodape -->
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div style="width: 100%; position: fixed; bottom: 0;">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-dark" href="#">Todos Direitos Reservados</a>
            </div>
            </div>
            <!-- Copyright -->
        </footer>
</body>
</html>
