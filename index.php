<?php 

    // a api só aceita json como entrada
    header ("Content-Type: application/json");

    require ("vendor/autoload.php");

    // aqui capturamos o método e o que está na url após o host:porta/
    $method = $_SERVER ["REQUEST_METHOD"];
    $url = $_SERVER ["REQUEST_URI"];

    // terá que ser criado um if ou elif com um switch interno para cada método (post, get, put, delete)
    if ($method == "POST") {

        // pode haver várias operações com o método post, cada uma delas será um case
        switch ($url) {

            case "/login" : 

                $login = new Controllers\UserController ();

                //aqui nós passamos como parâmetro para a função logino file_get_contents ("php://input")
                // que vai capturar o json que foi passado como entrada e se houver sucesso a resposta no echo
                // será o que foi desejado
                $response = $login -> login (file_get_contents ("php://input"));
                echo ($response);
                break;

                case "/cadastro" : 

                    $cadastro = new Controllers\UserController ();
    
                    //aqui nós passamos como parâmetro para a função logino file_get_contents ("php://input")
                    // que vai capturar o json que foi passado como entrada e se houver sucesso a resposta no echo
                    // será o que foi desejado
                    $response = $cadastro -> cadastro (file_get_contents ("php://input"));
                    echo ($response);
                    break;

                // se nenhuma rota faz parte do método a mensagem abaixo é retornada no echo
            default : 

                $response = [
                    "status" => 404,
                    "message" => "Rota $url nao encontrada"
                ];
                header ("HTTP/1.0 404 Page Not Allowed");
                echo (json_encode ($response));
        }
    } else {
        // se o método passado não está em nenhum if então ele não faz parte da api logo
        // a mensagem abaixo é retornada no echo
        $response = [
            "status" => 405,
            "message" => "Metodo $method nao permitido"
        ];
        header ("HTTP/1.0 405 Method Not Allowed");
        echo (json_encode ($response));
    }


/* 
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

if (isset($_POST['path'])){
    
    $path = explode("/", $_POST['path']);
    var_dump($path);
} else {
    echo "Caminho não encongdtrado";
    exit;
}

if(isset($path[0])) {$api = $path[0];} else {echo "Caminho não encontrado";exit;}
if(isset($path[1])) {$acao = $path[1];} else {$acao = "";}
if(isset($path[2])) {$param = $path[2];} else {$param = "";}

$method = $_SERVER['REQUEST_METHOD'];
var_dump($method);
include_once "src/controller/users.php";
*/
