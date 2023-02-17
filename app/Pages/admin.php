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
<html lang="pt-br">
<head>
    <title> Area restrita - <?php echo $nome; ?></title>
</head>
<body>

<div id="main">
    <ul>
        <li><a href="#">Admin Panel</a></li>
        <li><a href="#">Home</a></li>

        <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
    </ul>
        <h3> Area Restrita você esta logado como Administrador  <?php    echo $nome ?></h3>
    <br>
    <h3> Lista de usuários no banco de dados:</h3>
</div>
<div id="content" >
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
</body>

</html>

