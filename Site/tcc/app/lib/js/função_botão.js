var carrinho = []
var carrinhoArray = '';

function submit(){
    let p = document.getElementById('carrinho')
    resultado = carrinho.map(pedido => [pedido.nome,pedido.quantidade])
    window.location.href = "http://projetotcc.educacao.ws/app/view/cliente/carrinho.html?" + resultado;
}

function adicionar(nome){
    
    let div = document.getElementById(nome).innerText;
    let valor = parseInt(div)
    let x = document.getElementById(nome);

    
      
    if (valor <= 8){
        valor = valor + 1;
        x.innerHTML = valor;

        let pedido = {'nome': nome , 'quantidade' : valor};

        objIndex = carrinho.findIndex(pedido => pedido.nome == nome)

        if (objIndex == -1){
            carrinho.push(pedido)
        }

        else{
            carrinho[objIndex] = pedido;
        }
    }
}

function subtrair(nome){

    let div = document.getElementById(nome).innerText;
    let valor = parseInt(div)
    let x = document.getElementById(nome);

    if (valor != 0){
        valor = valor - 1;
        x.innerHTML = valor;

        let pedido = {'nome': nome , 'quantidade' : valor};

        objIndex = carrinho.findIndex(pedido => pedido.nome === nome);
            

        if (objIndex == -1){
            carrinho.push(pedido)
        }

        else{
            carrinho[objIndex] = pedido;  

            if(carrinho[objIndex]['quantidade'] == 0){
                carrinho.splice(objIndex, 1)
            }             
        }
    } 
}