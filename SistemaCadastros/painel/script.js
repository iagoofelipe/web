import Pedidos from "../util/Pedidos.js";

export function callSideBar(){
    var sidebar = $("#sidebar");
    sidebar.toggleClass("hide");

    if(sessionStorage["sidebar_opened"] == "true"){
        $("#user-image,.sidebar > section > p, .sidebar .text-icon").css({"display":"none"});
        $(".container-center").css({"width":"95vw"});
        $(".sidebar > section").css({"align-items": "center"});
        sessionStorage["sidebar_opened"] = "false";
    } else {
        $("#user-image,.sidebar > section > p, .sidebar .text-icon").css({"display":"flex"});
        sessionStorage["sidebar_opened"] = "true";
        $(".sidebar > section").css({"align-items": "center"});
    }



    // if(sidebar.css("display") == "none"){
    //     sidebar.css("display", "block");
    //     $(".container-center").css("width", "90vw");
    // } else {
    //     sidebar.css("display", "none");
    //     $(".container-center").css("width", "100vw");
    // }
}

export function getPedidos(){
    $.get("../server/getPedidos.php", "json", function(data){
            var pedidos = new Pedidos(data);
            pedidos.setTabPedidos();
        }
    );
}
