<?php

class DashboardController
{
    public function index (){
        session_start();

        if(!isset($_SESSION['usuario_id'])){
            header('Location: index');
        }
        include 'views/dashboard.php';
    }
}

?>

