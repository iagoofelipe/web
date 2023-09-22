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
    <title>Sidebar</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style-nav.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../util/geral.js"></script>
    <script type="module">
        import {getPedidos, setAllCheckboxs} from "./js/script.js";
        
        $(function(){
            console.log(getPedidos());
            $(".sidebar");
            
            setAllCheckboxs();
        })
    </script>

</head>
<body>
    <nav class="menu-lateral">
        <ul class="itens-menu">
            <li class="item-menu" onclick="window.location.href = '../painel/'">
                <a href="#">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-columns-gap"></i></span>
                    <span class="txt-link">Dashboard</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#" onclick="logout()">
                    <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
                    <span class="txt-link">sair</span>
                </a>
            </li>
        </ul>
    </nav>
    <div style="margin-left: 80px; height: 100vh">
        <div class="container-center">
            <section id="pedidos">
                <h1 class="section-title">Pedidos</h1>
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
            </section> 
        </div>
    </div>
</body>
</html>