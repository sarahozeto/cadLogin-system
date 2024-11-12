<?php

class UserController
{

    public function register()
    {
        // verficia se a requisicão HTTP é do tipo POST (se o formulário foi enviado)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // coleta os dados enviados pelo formulário e organiza em uma array
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT), // criptografa a senha
                'perfil' => $_POST['perfil']
            ];

            //  chama o método create do model User para criar o novo usuário no BD
            User::create($data);
            header('Location: index.php');
        } else {
            include 'views/register.php';
        }
    }
    // Função para listas todos os usuários
    public function list()
    {
        $users = User::all();
        include 'views/list_users.php';
    }


    public function edit($id)
    {
        session_start();
        if ($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor') {
            $user = User::find($id);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $data = [
                    'nome' => $_POST['nome'],
                    'email' => $_POST['email'],
                    'perfil' => $_POST['perfil']
                ];
                User::update($id, $data);
                header('Location: index.php?action=list');
            } else {
                include 'views/edit_users.php';
            }
        } else {
            echo 'Você não tem permissão para editar usuários';
        }
    }

    public function delete($id)
    {
        User::delete($id);
        header('Location: index.php?action=list');
    }
}
