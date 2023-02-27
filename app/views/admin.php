<?php
    session_start() ;
    include("../functions/conexao.php");
if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    $adm = $_SESSION["usuario"][1];
    $nome = $_SESSION["usuario"][0];

} else {
    echo "<script>window.location = '../functions/login.php' </script>";
}
    ?>
<link rel="stylesheet" href="../../public/css/login.css">
<html lang="pt-br">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!--  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<head>
    <title> Area restrita - <?php echo $nome; ?></title>
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
                    <a class="nav-link" href="../functions/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
        <h3> Area Restrita você esta logado como Administrador  <?php    echo $nome ?></h3>
    <br>
    <h3> Lista de usuários no banco de dados:</h3>
    <?php
        if ($adm):?>
            <table>
                <thead>
                <tr>
                    <td> Email</td>
                    <td> Senha</td>
                    <td> nome</td>
                    <td> id</td>
                </tr>
                </thead>
                <tbody>
                <?php
                    $query = $conexao->prepare("SELECT * FROM usuarios");
                    $query->execute();

                    $users = $query->fetchAll(PDO::FETCH_ASSOC);

                    for($i = 0; $i < sizeof($users); $i++):
                        $usuarioAtual = $users[$i];
                        ?>
                        <tr>
                            <td> <?php echo $usuarioAtual["email"]; ?> </td>
                            <td> <?php echo $usuarioAtual["senha"]; ?> </td>
                            <td> <?php echo $usuarioAtual["nome"]; ?> </td>
                            <td> <?php echo $usuarioAtual["id"]; ?> </td>

                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        <?php endif; ?>
</div>

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

