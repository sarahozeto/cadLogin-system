# Sistema de Cadastro de Login 
![index do site]()

# INDÍCE
[Cadastro de Login - Introdução](#cadadastro-de-login---introdu%C3%A7%C3%A3o)<br>
[Tecnologias utilizadas](#tecnologias-utilizadas) <br>
[Funcionalidades](#funcionalidades) <br>
[Considerações finais](#considera%C3%A7%C3%B5es-finais)  <br>


# Cadadastro de Ecommerce - Introdução
![]()<br>


## Tecnologias utilizadas
Neste projetos tivemos o uso de:
* HTML 5 
* CSS 3
* PHP
* XAMPP
* MYSQL
* GIT 
* GITHUB

## Funcionalidades
Para elaborar o site, construímos três sessões para trabalhar em recursos especíificos que fariam o site funcionar da forma que deveria. Divimos essas sessões como:<br>

### CONTROLLERS
![]() <br>
Os arquivos **CONTROLLERS** - ou controladores, esses arquivos servem para a manipulção de dados e criação de novos usuários. <br><br>

#### AuthController 
![printi AuthController](IMG/print-authcontroller.png)<br>
O código acima lida com o processo de login de um usuário. Verifica se a requisição **HTTP** é do tipo **POST**, ou seja, se o formulário foi enviado. Utilizando o recurso **findByEmail** ele verifica se a senha e o email preenchidos no formulário são condizentes com os que foram cadastrado e, se tudo estiver correto, inicia uma sessão e redireciona o usuário. Caso contrário, exibe uma mensagem de erro.

#### UserController
![print UserController](IMG/print-usercontroller.png)<br>
As linhas de código acima tratam o registro de novos usuários. Se o formulário for enviado, ele coleta os dados e os organiza uma array, em seguida ele criptografa a senha e no final chama o método **create** do model **User** para criar o novo usuário no BD.

#### DashboardController
![]()<br>
No momento da documentação deste arquivo, ele se encontra sem alterações, ou seja, vazio.<br><br>

### MODELS
![]()<br>
Os arquivos **MODELS** - ou modelos - são responsáveis pela conexão com o banco de dados.<br>

####  Database.php
![]()<br>

#### User.php
![]()<br><br>

### VIEWS
![]()<br>
Os arquivos **VIEWS** - ou arquivos de vizualização, são os responsáveis por aquilo que vai ser apresentado ao usuário, ou seja, a "front-end" do site.

#### Login.php
![]()<br>

#### Register.php
![]()<br>


### DATABASE
![]()<br>

### ARQUIVO DE ROTA
![]()<br>


## Considerações finais
Por enquanto o projeto ainda se encontra em desenvolvimento, logo, ele está incompleto e sujeito a alterações futuras.

Este projeto foi desenvolvido por <strong> Sarah Ozeto </strong>, com a orientação do professor Leonardo Rocha. <br>
![Imagem de perfil]()