export default class Pedidos {
    length = 0;

    constructor(values){
        this.values = JSON.parse(values);
    
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

        this.length = count + 1;
        this.tabela.innerHTML = conteudo;
    }
}