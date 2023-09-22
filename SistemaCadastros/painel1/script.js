import Pedidos from "../util/Pedidos.js";

export function callSideBar(){
    var sidebar = $("#sidebar");    
    sidebar.toggleClass("hide");

    if(sessionStorage["sidebar_opened"] == "opened"){
        $("#user-image,.sidebar > section > p, .sidebar .text-icon").css({"display":"none"});
        $(".container-center").css({"width":"95vw"});
        $(".sidebar > section").css({"align-items": "center"});
        sessionStorage["sidebar_opened"] = "closed";
    } else {
        $("#user-image,.sidebar > section > p, .sidebar .text-icon").css({"display":"flex"});
        $(".sidebar .text-icon").css({"display":"contents"});
        $(".sidebar > section").css({"align-items": "flex-start"});
        $(".user").css({"align-items": "center"});
        sessionStorage["sidebar_opened"] = "opened";
    }
}

export function getPedidos(){
    $.get("../server/getPedidos.php", "json", function(data){
            var pedidos = new Pedidos(data);
            pedidos.setTabPedidos();
        }
    );
}
