<?php 
// DEfine classe database, responsavél por gerenciar a conexão com o banco de dados

class database
{
//Padrão Singleton, cujo objetivo é garantir que apenas uma única instância de classe seja criada durante a execução do  progama, e que essa instância seja reutilizada sempre que necessário
    private static $instance = null;

    public static function getConnection {
        if(!self::$instance){
            //configuração de conexão com BD
            $host       = 'localhost';
            $db         = 'sistema_usuarios';
            $user       = 'root';
            $password   ='';

            // a conexão usa o driver Mysql (mysql:) e as informações de host e BD
            self::instance = new PDO("mysql:$host;dbname=$db", $user, $password);

            // Define o modo de erro para exceções, facilitando a de puração e tratamento do erro
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

}

?>
