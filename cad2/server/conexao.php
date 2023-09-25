<?php
include("_Database.php");
include("_Usuario.php");

$usuario = new Usuario($db);

if(!isset($_SESSION)){
    session_start();
}

if($usuario->verificarUsuario($_POST["user"], $_POST["password"])){
    $_SESSION['user_connected'] = "true";
    $_SESSION['db'] = $db;
    echo "true";

} else {
    $_SESSION['user_connected'] = "false";
    echo "false";
}
?>