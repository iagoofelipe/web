export default class Pedidos {
    constructor(values){
        this.values = JSON.parse(values);
        this.length = values.length;
    
    } setTabPedidos(){
        // utilizado para inserir os valores na tela, id tab-pedidos-body
        this.tabela = document.getElementById("tab-pedidos-body");
        var conteudo = "";
        var count = 0;
        var data, modelo, validade;


        this.values.forEach(function(pedido){
            data = pedido["data"];
            modelo = pedido["modelo"];
            validade = pedido["validade"];
            
            conteudo += `<tr><td name="checkbox"><input type="checkbox" id="tab-c-${count}"></td><td name="dat">${data}</td><td name="modelo">${modelo}</td><td name="validade">${validade}</td></tr>`;
            count++;
        });
        this.tabela.innerHTML = conteudo;
    }
}