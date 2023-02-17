<?php
namespace app\controllers;
/*
function getPagina(){
    $url = $_SERVER['REQUEST_URI'];
    $metodo = $_SERVER['REQUEST_METHOD'];
    $tipoUser = $_GET['login'];
    $senhaUser =$_GET['senha'];
     if($metodo == "GET"){
/*
         switch($tipoUser){
             case "administrador":
                include("../Pages/admin.php");
                break;
                //-----------------
             case "usuario":
            include ("../Pages/main.php");
            break;

             default:
                 include ("../Pages/login.php");
                 break;
         }
     }
return include("../Pages/login.php");
} */

class ControllerLogin{
    public function index(){
        include("app/Pages/login.php");
    }
}

?>