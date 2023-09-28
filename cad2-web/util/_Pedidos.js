export class Pedidos {
    
    constructor(){
        // var interval = setInterval(getDados, 2000);
        
        // function getDados(){
        //     console.log("requisição");
        //     if(sessionStorage['pedidos'] == undefined || sessionStorage['pedidos'] == ""){
        //         $.get("../server/getPedidos.php", "json").done(function(data){
        //             sessionStorage["pedidos"] = data;
        //         });
    
        //         try {
        //             this.values = JSON.parse(sessionStorage["pedidos"]);
        //             console.log(this.values);
        //         } catch (error) {}
        //     } else {
        //         clearInterval(interval);
        //     }
        // }
        
        $.get("/server/getPedidos.php", "json").done(function(data){
            sessionStorage["pedidos"] = data;
        });
        try {
            this.values = JSON.parse(sessionStorage["pedidos"]);
        } catch (error) {
            window.location.reload();
        }
        
    }
    
    setTabPedidos(){
        // utilizado para inserir os valores na tela, id tab-pedidos-body
        this.tabela = document.getElementById("tab-pedidos-body");
        var conteudo = "";
        var count = 0;

        this.values.forEach(function(pedido){           
            conteudo += `<tr onclick="setDetalhesPedido(this)" id="tab-r-${count}"><td name="checkbox"><input type="checkbox" id="tab-check-${count}"></td><td name="dat">${pedido["data"]}</td><td name="modelo">${pedido["modelo"]}</td><td name="validade">${pedido["validade"]}</td></tr>`;
            
            count++;
        });

        this.length = count + 1;
        this.tabela.innerHTML = conteudo;
    }

}

export function setDetalhesPedido(pedido){
    console.log(pedido);
    // $("#pedidos-pedidos-modelo-num").text(`${pedido["modelo"]}, ${pedido["num-pedido"]}`);

    // $("#pedidos-data").text(pedido["data"]);
    // $("#pedidos-validade").text(pedido["validade"]);
    // $("#pedidos-cliente").text(pedido["cliente-nome"]);
    // $("#pedidos-cpf").text(pedido["cpf"]);
    // $("#pedidos-cnpj").text(pedido["cnpj"]);
}