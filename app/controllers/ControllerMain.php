<?php
    namespace app\controllers;

    class ControllerMain{
        public function index(){
            include("app/views/main.twig");
        }
    }