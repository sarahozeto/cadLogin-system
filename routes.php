<?php
//inclui arquivos de controlador nescessários para lidar com diferentes ações 
require 'controllers/AuthController.php';
//inclui o controlador de autenticação
require 'controllers/UserController.php';
//inclui o controlador de usuários
require 'controllers/DashboardController.php';
//inclui o controlador de dashboard

//Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController();
//instância controlador de auteticação
$userController = new UserController();
//instância controlador de usuário
$dashboardController = new DashboardController();
//instância controlador de dashboard

//coleta a acão de URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET['action'] ?? 'login';
//usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

switch($action){
    case 'login':
        $authController->login();
        //chama o método de login do controlador de autênticação
        
}
?>