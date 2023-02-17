<?php

    include("conexao.php");
   // include ("../controllers/ControllerLogin.php");


    ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./public/css/login.css">
<html lang="pt-br">
<head>
    <title> Login Page</title>
</head>
<body>
    <div id="main">
        <ul>
            <li><a href="#">Admin   Panel</a></li>
            <li><a href="#">Home</a></li>

            <li style="float:right"><a class="active" href="#">Logout</a></li>
        </ul>
        <div id="campos">
            <form action="../AutenticationWebVoxline/app/Pages/loginValidate.php" method="post">
        <h3> Faça o Login abaixo: </h3>
        <input type="text" name="email" id="email" placeholder="Digite seu Login">
        <input type="text" name="senha" id="senha" placeholder="Digite sua Senha">
        <input type="submit" name="enviar" value="enviar">
    </div>
        </form>
    </div>

    <div id="secondary"></div>



<div id="footer">
    <h2> Voxline, todos direitos reservados</h2>
</div>
</body>

</html>
