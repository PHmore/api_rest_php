<?php 

require_once ("vendor/autoload.php");

$url = $_SERVER ["REQUEST_URI"];

switch ($url) {
    case "/login" : 
        include ("./src/view/Login.php");
        break;
    default : 
        include ("./src/view/NotFound.php");
        break;
}

/*
$router = new \Bramus\Router\Router();

$router -> get ("/login" , function () {
    include ("src/view/Login.php");
});

$router -> post ("/login" , function () {
    include ("src/view/Login.php");
});

$router -> set404 (function () {
    include ("src/view/NotFound.php");
});

$router -> run ();
*/
?>