<?php
    session_start();
    if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
        $adm = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
    } else {

    }
    require_once "vendor/autoload.php";
    include ("app/Pages/conexao.php");
    $loader = new Twig\Loader\FilesystemLoader('app/Pages/');
    $twig = new Twig\Environment($loader, [
        'cache' => 'app/Pages/cache',
        //abaixo remove o cache (melhor para ambiente de homologação)
        'cache' => false

    ]);
//abaixo irei trabalhar para exibicao do usuario do Database
    $nomeTwig = $nome;
$template = $twig->Load('main.twig');
$valores = array('VariavelTwig'=>"Está Página está sendo exibida através do Twig",
    'Titulo' => "Página Home usuário com Twig",
);

echo $template->render($valores);