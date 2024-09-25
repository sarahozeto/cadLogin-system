# Cad-Ecommerce
![index do site](img/indexdosite.php.png)

# INDÍCE
[Cadastro de Ecommerce - Introdução](#cadadastro-de-ecommerce---introdu%C3%A7%C3%A3o)<br>
[Tecnologias utilizadas](#tecnologias-utilizadas)<br>
[Funcionalidades](#funcionalidades)<br>
[Considerações finais](#considera%C3%A7%C3%B5es-finais) <br>


# Cadadastro de Ecommerce - Introdução
![]()<br>
Neste projeto foi utilizado os recurso do Mysql em conjunto com a linguagem PHP para desenvolver o banco de dados de um site que simula um carrinho de compras online, na qual é possível cadastrar novos produtos, marcas ou categorias para adicionar ao carrinho.

**O que é o Mysql?** <br>
MySQL é um sistema de gerenciamento de banco de dados relacional (RDBMS) de código aberto que utiliza a linguagem SQL (Structured Query Language) para gerenciar e manipular dados. Ele é amplamente utilizado em desenvolvimento web e aplicativos empresariais devido à sua confiabilidade, desempenho e facilidade de uso. MySQL é útil para armazenar, organizar e recuperar grandes volumes de dados, facilitando operações como consultas, inserções, atualizações e exclusões de dados em bancos de dados.

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
Para o site funcionar de forma devida e correta, trabalhamos com os seguintes recursos:

### Incluindo o arquivo de conexão
![include('controller/conexao.php');](img/include.png) <br>
O comando **include** permite a inclusão de um arquivo em outro arquivo PHP. No código o arquivo **conexao.php** estabelece uma conexão com o banco de dados MySQL utilizando o usuário root, acessando o banco de dados chamado 'compra'. Depois de estabelcer a conexão com banco, ele configura o conjunto de caracteres. Se houver algum erro, o código é interrompido.
 
![conexao.php](img/conexao.png)

### Captura do dado enviado
![$descricao = $_POST['descricao'];](img/descricao.png)<br>
O valor do campo descricao enviado através de um formulário HTML via método POST é capturado e armazenado na variável **$descricao**.

### Criação da query SQL
![$cad_categoria = "INSERT INTO categoria(DESCRICAO) VALUES ('$descricao')";](img/criacaoquery.png)<br>
Nessa parte é criada uma query para inserir uma nova linha nas tabelas, definindo o campo **DESCRICAO** com o valor da variável com o mesmo nome, **$descricao**.

### Execução da query e verificação
![](img/fechamentoconexao.png)<br>
Neste bloco, executamos a query usando a função **mysqli_query()**. Se a execução for bem-sucedida, é exibida uma mensagem indicando o bom processo, caso contrário, é exibida uma mensagem de erro contendo a query que falhou.

### Fechamento da conexão
![mysqli_close($mysqli);](img/closephp.png)<br>
Por fim, encerramos a conexão com o banco de dados.

### Banco de dados
![banco de dados](img/bancodedados.png)

## Considerações finais
Por enquanto o projeto ainda se encontra em desenvolvimento, logo, ele está incompleto e sujeito a alterações.

Este projeto foi desenvolvido por <strong> Sarah Ozeto </strong>, com a orientação do professor Leonardo Rocha. <br>
![Imagem de perfil](img/fotoperfil.png)