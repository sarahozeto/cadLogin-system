# Sistema de Cadastro de Login 
![index do site]()

# INDÍCE
[Cadastro de Login - Introdução](#cadadastro-de-login---introdu%C3%A7%C3%A3o)<br>
[Tecnologias utilizadas](#tecnologias-utilizadas) <br>
[Funcionalidades](#funcionalidades) <br>
[Considerações finais](#considera%C3%A7%C3%B5es-finais)  <br>


# Sistema de Cadastro de Login - Introdução
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
![print controllers]() <br>
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
O código acima é responsável por gerenciar a conexão com o banco de dados, definindo uma classe database. A conexão usa o driver Mysql **(mysql:)** e as informações de host e BD para criar uma instância para se conectar ao BD. Ao final ele define o modo de erro exceções, facilitando a de puração e tratamento do erro.<br><br>

#### User.php
![]()<br>
O código possui uma função para encontrar um usuário pelo e-mail de cadastro, em seguida eme obtém conexão com o banco de dados para guard-la em uma variável retornando os dados do usuário encontrado como um array associativo. Em seguida, criamos a função que cria o usuário na base de dados e localiza o usuário pelo id.<br><br>

### VIEWS
![]()<br>
Os arquivos **VIEWS** - ou arquivos de vizualização, são os responsáveis por aquilo que vai ser apresentado ao usuário, ou seja, a "front-end" do site.

#### Login.php
![]()<br>
Front-end do o que o usuário vai vizualizar para realizar seu login.

#### Register.php
![]()<br>
Front-end do que o usuário vai vizalizar para realizar seu cadastro, tendo três opções de tipos de usuários: 
* ADMIN
* GESTOR
* COLABORADOR<br>


### DATABASE
![]()<br>
Esse código SQL cria um banco de dados e uma tabela para armazenar informações de usuários.<br><br>

### ARQUIVO DE ROTA
![]()<br>
Este código define a ação a ser executada com base no parâmetro action passado na URL. Se for **login**, ele chama o método de login, e o mesmo com o método **register**, se não for nenhum dos dois, o método de login é chamado por padrão.


## Considerações finais
Por enquanto o projeto ainda se encontra em desenvolvimento, logo, ele está incompleto e sujeito a alterações futuras.

Este projeto foi desenvolvido por <strong> Sarah Ozeto </strong>, com a orientação do professor Leonardo Rocha. <br>
![Imagem de perfil]()