import { logout, checkConnection } from "/util/global.js";
import { Pedidos, setDetalhesPedido } from "/util/_Pedidos.js";

checkConnection();
setInterval(checkConnection, 5000);
document.getElementById("logout").onclick = logout;

var pedidos = new Pedidos();
var timer_setPedidos = setInterval(setPedidos, 500);

function setPedidos(){
    if(sessionStorage["pedidos"]){
        clearInterval(timer_setPedidos);
        pedidos.setTabPedidos();
    }
}

export {setDetalhesPedido}