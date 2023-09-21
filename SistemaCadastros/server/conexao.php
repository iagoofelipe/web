<?php
include("_Database.php");
include("_Usuario.php");

$db = new Database("requests.mysql.uhserver.com", "unit_user", "unit@12", "requests");
$usuario = new Usuario($db);

if(!isset($_SESSION)){
    session_start();
}

if($usuario->verificarUsuario($_POST["user"], $_POST["password"])){
    $_SESSION['user_connected'] = "true";
    echo "true";

} else {
    $_SESSION['user_connected'] = "false";
    echo "false";
}
?>