<?php
if(!isset($_SESSION)){
    session_start();
}
include("../server/checkConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../geral.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">

    <!-- icones e fontes -->
    <script src="https://kit.fontawesome.com/5eabb2e3f8.js" crossorigin="anonymous"></script>
    <!-- icones e fontes -->

    <script>
        $("#sidebar").slideToggle
    </SCRipt>
</head>
<body>
    <!-- Tela central
    <button onclick=logout()>Logout a</button> -->
    <div class="sidebar" id="sidebar">
        <section class="user">
            <img src="./img/user.svg" alt="user-image">
            <!-- <i class="fa-solid fa-user" style="color: #a0abbf;"></i> -->
            <label for="username" id="username">user</label>
        </section>
        <section>
            <p>principal</p>
            <label for="inicio"><i class="fa-solid fa-house" style="color: #a0abbf;"></i> início</label>
            <label for="tarefas"><i class="fa-solid fa-list-check" style="color: #a0abbf;"></i> tarefas</label>
        </section>
        <section>
            <p>principal</p>
            <label for="inicio"><i class="fa-solid fa-house" style="color: #a0abbf;"></i> início</label>
            <label for="tarefas"><i class="fa-solid fa-list-check" style="color: #a0abbf;"></i> tarefas</label>
        </section>
    </div>
    <main></main>
    <i class="fa-solid fa-bars" style="color: #333d4e;" onclick="callSideBar()"></i>
</body>
</html>