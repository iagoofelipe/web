<?php
if(!isset($_SESSION)){
    session_start();
}

$_SESSION["user_connected"] = "false";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas - Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./script.js"></script>
</head>
<body>
    <div class="main-login">
        <div class="container-center">
            <h1>gratafy</h1>
            <div id="form">
                <input class="textfield" type="text" id="user" placeholder="USUÁRIO">
                <input class="textfield" type="password" id="password" placeholder="SENHA">
                <button type="button" onclick="loginSubmit()" id="btn-login">LOGIN</button>
            </div>
        </div>    
    </div>
</body>
</html>