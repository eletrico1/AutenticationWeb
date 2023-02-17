<?php
    session_start() ;
    include ("conexao.php");
    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        $adm = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];

    } else {
        echo "<script>window.location = 'login.php' </script>";
    }
?>
<link rel="stylesheet" href="/AutenticationWebVoxline/css/login.css">
<head>
    <title> Area Principal </title>
</head>
<body>
<div id="main">
    <ul>
        <li><a href="admin.php">Admin Panel</a></li>
        <li><a href="main.php">Home</a></li>

        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
    </ul>
    <h3> Area Principal você está logado como usuário <?php echo $nome; ?></h3>
</div>
</div>
</body>

</html>

