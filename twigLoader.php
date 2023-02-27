<?php
    session_start();
    if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
        $adm = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
    } else {
        echo "<script>alert('Acesso não permitido');</script>";
        echo "<script>window.location = 'index.php' </script>";

    }
    require_once "vendor/autoload.php";
    include("app/functions/conexao.php");
    $loader = new Twig\Loader\FilesystemLoader('app/views/');
    $twig = new Twig\Environment($loader, array(
        'cache' => 'app/views/cache',
        //abaixo remove o cache (melhor para ambiente de homologação)
        'cache' => false,
        'debug'=> true
    ));

//abaixo irei trabalhar para exibicao do usuario do Database
    $nomeTwig = $nome;
    $clientes = array(
        array('nome'=>'allan','email'=>'allan.barreto@voxline.com.br','telefone'=>'965662035'),
        array('nome'=>'joselito','email'=>'joselito.barreto@voxline.com.br','telefone'=>'999999999'),
        array('nome'=>'thiago','email'=>'thiago.barreto@voxline.com.br','telefone'=>'111111111')
    );
    $twig->addExtension(new Twig_Extension_Debug());
$template = $twig->Load('main.twig');
$valores = array('VariavelTwig'=>"Está Página está sendo exibida através do Twig",
    'Titulo' => "Página Home usuário com Twig",
    'clientesArray'=>$clientes

);

echo $template->render($valores);