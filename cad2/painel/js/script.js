import { logout, checkConnection } from "/git/cad2/util/global.js";
import { Pedidos, setDetalhesPedido } from "/git/cad2/util/_Pedidos.js";

checkConnection();
setInterval(checkConnection, 5000);
document.getElementById("logout").onclick = logout;

var pedidos = new Pedidos();
var timer_setPedidos = setInterval(setPedidos, 500);

function setPedidos(){
    if(sessionStorage["pedidos"]){
        clearInterval(timer_setPedidos);
        pedidos.setTabPedidos();

        // pedidos.values.forEach(function(pedido){
        //     var index = parseInt(pedido["id"]) - 1;

        //     $(`#tab-r-${index}`).on("click", function(){
        //         setDetalhesPedido(pedido);
        //     });
        // });
    }
}

export {setDetalhesPedido}