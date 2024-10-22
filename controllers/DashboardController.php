<?php

class DashboardController
{
    // Inicia uma sessão para verificar se o usuário esta autenticado
    public function index (){
        session_start();

        if(!isset($_SESSION['usuario_id'])){
            header('Location: index');
            exit; //garante que o script seja interrompido após o redirecionamento
        }
        include 'views/dashboard.php';
    }
}

?>