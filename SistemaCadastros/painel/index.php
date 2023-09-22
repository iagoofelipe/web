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
    <link rel="stylesheet" href="style.css">
    
    <!-- icones e fontes -->
    <script src="https://kit.fontawesome.com/5eabb2e3f8.js" crossorigin="anonymous"></script>
    <!-- icones e fontes -->
    
    <script type="module">
        import {getPedidos, callSideBar} from "./script.js";

        $(function(){
            getPedidos();
            $(".sidebar")
        })
        sessionStorage["sidebar_opened"] = true;
        $("#menu-icon").click(callSideBar);

    </script>

</head>
<body>
    <div class="sidebar" id="sidebar">
        <section class="user">
            <img src="./img/user.svg" alt="user-image" id="user-image">
            <label for="username" id="username">user</label>
        </section>
        <section>
            <p>principal</p>
            <label id="inicio" for="inicio"><i class="fa-solid fa-house" style="color: #a0abbf;"></i><span class="text-icon"> início</span></label>
            <label id="tarefas" for="tarefas"><i class="fa-solid fa-list-check" style="color: #a0abbf;"></i><span class="text-icon"> tarefas</span></label>
        </section>
        <section>
            <p>opções</p>
            <label id="config" for="config"><i class="fa-solid fa-gear"></i><span class="text-icon"> definições</span></label>
            <label id="sair" for="sair" onclick="logout()"><i class="fa-solid fa-right-from-bracket"></i></i><span class="text-icon"> sair</span></label>
        </section>
    </div>
    <main class="container-center">
        <header id="main-header">
            <div class="left-icons">
                <i id="menu-icon" class="fa-solid fa-bars" style="color: #333d4e;"></i>
                <i class="fa-solid fa-plus" style="color: #333d4e;"></i>
            </div>
            <div class="div-search">
                <input type="text" id="input-search" placeholder="pesquisar...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </header>
        <h1 class="section-name">Pedidos</h1>
        <table id="tab-pedidos">
            <thead>
                <tr>
                    <td><input type="checkbox" id="tab-c-master"></td>
                    <td>data</td>
                    <td>modelo</td>
                    <td>validade</td>
                </tr>
            </thead>    
            <tbody id="tab-pedidos-body">
                <!-- INSERIDOS VIA JAVASCRIPT -->
            </tbody>
        </table>
        <div id="teste"></div>
    </main>
</body>
</html>