<?php

if(!isset($_SESSION)){
    session_start();
}

if(!$_SESSION["user_connected"]){
    header("Location: login.php");
} else {
    header("Location: painel.php");
}

?>