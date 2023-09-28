import Pedidos from "/web/cad/util/Pedidos.js";

function getPedidos(){
    var retorno = "retorno";
    var pedidos = new Pedidos();

    $.get("../server/getPedidos.php", "json").done(function(data){
            // var pedidos = new Pedidos(data);
            // pedidos.setTabPedidos();
            // retorno = "retorno alterado";

            pedidos.setValues(data);

        }  
    );
}

function setAllCheckboxs(){
    var pedidos = sessionStorage['pedidos'];
    console.log(pedidos);

}

export {getPedidos, setAllCheckboxs};