<?php 
//Classe que será usada para instanciar conexão com banco de dados
namespace Connections;
require_once ("vendor/autoload.php");
use PDO;

class Connection{
    public static function Connect(){
        $host = "localhost";
        $dbname = "api_php";//Insira aqui nome do banco de dados 
        $user = "root"; //Isira aqui seu nome de usuário;
        $password = null; //Insira aqui sua senha;
        
        return new PDO("mysql:host={$host};dbname={$dbname};charset=UTF8;",$user, $password);
    }
}
?>