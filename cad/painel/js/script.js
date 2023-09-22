import Pedidos from "/web/cad/util/Pedidos.js";

function getPedidos(){
    var retorno = "retorno";

    $.get("../server/getPedidos.php", "json").done(function(data){
            var pedidos = new Pedidos(data);
            pedidos.setTabPedidos();
            retorno = "retorno alterado";
        }
    );

    console.log(retorno);
}

function setAllCheckboxs(){
    var pedidos = sessionStorage['pedidos'];
    console.log(pedidos);

}

export {getPedidos, setAllCheckboxs};