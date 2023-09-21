<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION["user_connected"]) || $_SESSION["user_connected"] == "false"){
    header("Location: ./login/");
} else {
    header("Location: ./painel/");
}

?>