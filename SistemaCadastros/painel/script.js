import Pedidos from "../util/Pedidos.js";

export function callSideBar(){
    var sidebar = $("#sidebar");
    if(sidebar.css("display") == "none"){
        sidebar.css("display", "block");
        $(".container-center").css("width", "90vw");
    } else {
        sidebar.css("display", "none");
        $(".container-center").css("width", "100vw");
    }
}

export function getPedidos(){
    $.get("../server/getPedidos.php", "json", function(data){
            var pedidos = new Pedidos(data);
            pedidos.setTabPedidos();
        }
    );
}
