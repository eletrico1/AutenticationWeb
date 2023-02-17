<?php

    require "bootstrap.php";
    use Slim\Http\request;
    use Slim\Http\Response;
    /*
$app->group('/admin', function () use($app){
    $app->get('/login',function (){
        echo 'login';
    });
}); */
    //abaixo chamando função de chamar pagina atraves do SLim framework
/* $app->get('/', function (){
    include("app/Pages/login.php");
}); */
    $app->get('/','app\controllers\ControllerLogin:index');
    //abaixo usar POST para enviar o ID via Formulario post
  //  $app->post('/','{id}' , 'app\controllers\UserController:update');

$app->run();
?>