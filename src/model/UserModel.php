<?php 

// atribui o namespace (apelido), chama o autoload de classes e chama a classe Connection e o PDO


namespace Models;
require_once ("vendor/autoload.php");
use Connections\Connection;
use PDO;

Class UserModel {

    // A função espera dois parâmetros, cria um objeto $connection que será a conexão com o banco de dados
    // e depois a $sql recebe o resultado da função connect que executa uma query passada internamente.
    // A variável $sql é reaproveitada e recebe o fetch do resultado do banco de dados (pesquisa sobre o que é fetch).
    // O resultado da $sql é retonado.

    function login ($email , $password) {
        $connection = new Connection ();
        $sql = $connection -> connect () -> query ("SELECT * FROM usuarios WHERE email = '$email' and senha = '$password'");
        $sql = $sql -> fetchAll (PDO::FETCH_ASSOC);
        return $sql;
    }

    function cadastro ($email , $password) {
        $connection = new Connection ();
        $sql = $connection -> connect () -> query ("INSERT INTO users (user_id, nome, senha) VALUES (NULL, '$email', '$password') ");
        $sql = $sql -> fetchAll (PDO::FETCH_ASSOC);
        return $sql;
    }

}

?>