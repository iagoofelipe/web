<?php
if(!isset($_SESSION)){
    session_start();
}

$_SESSION["user_connected"] = "false";
session_destroy();
?>