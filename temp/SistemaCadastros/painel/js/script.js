import Pedidos from "/web/sistemacadastros/util/Pedidos.js";

function getPedidos(){
    $.get("../server/getPedidos.php", "json", function(data){
            console.log("criando objeto");

            var pedidos = new Pedidos(data);
            console.log(pedidos.setTabPedidos());

            sessionStorage['pedidos'] = pedidos;
        }
    );
}

function setAllCheckboxs(){
    var pedidos = sessionStorage['pedidos'];
    
    // console.log(pedidos.);
}


export {getPedidos, setAllCheckboxs}