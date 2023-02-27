<?php
    require "bootstrap.php";
    use Slim\Http\request;
    use Slim\Http\Response;
    //abaixo chamando função de chamar pagina atraves do SLim framework
    $app->get('/','app\controllers\ControllerLogin:index');
    $app->get('/admin','app\controllers\ControllerAdmin:index');
    $app->get('/main','app\controllers\ControllerMain:index');
$app->run();
?>