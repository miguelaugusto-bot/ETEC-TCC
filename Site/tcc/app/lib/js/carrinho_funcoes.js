    var url = decodeURIComponent(window.location.href);

    var res = url.split("?");

    var resultado = res[1].split(",");

    console.log(resultado)  



    const celular = '+5511953537018';





    var mensagemOla = '🤚Olá Cory, meu nome é '

    var nomemsg = ", e meu pedido é :😋🍔"

    var enderecomsg = "🏠Meu endereço é: "

    var verificarCupom1 = '💵Esta aqui meu cupom '

    var verificarCupom2 = ', pode verificar pra mim?🤑'

    var observacao = "📋Estão aqui as minhas observações:✏️"

    var pedidos = "";



    function carrinho(array){

        var cardFinal = ''

        const card1 = '<div class="produto"><div class="card"><div class="card-body">'+'<label class="card-title">'

        const card2 = '</label><label class="card-title ml-3"> Quantidade : '

        const card3 = ' </label></div></div></div>'

        const card4 = '<br><label>Observações</label><textarea class="form-control mb-2" style="width:40%"id="exampleFormControlTextarea1" rows="3"></textarea><div class="form-row mx-auto" style="width: 80%;"><div class="col-md-4 mb-3"><label>Nome</label><input type="text" class="form-control"placeholder="Informe seu nome" id="nome"></div><div class="col-md-4 mb-3"><label>Endereço</label><input type="text" placeholder="Informe o endereço da entrega"class="form-control" id="endereco"></div><div class="col-md-4 mb-3"><label>Cupom</label><input type="text" class="form-control" id="cupom" placeholder="Informe seu cupom caso tenha"></div></div><div class="container center"><div class="botoes center"><button type="button" class="btn btn-danger" onclick="voltar()">Voltar</button><button type="button" class="btn btn-success" onclick="mandarMsg()">Pedir</button></div></div>'



        for (var i = 0; i < resultado.length; i+= 2) {

            cardFinal = cardFinal + card1 + resultado[i] + card2 +resultado[i+1] + card3;

        }

        document.getElementById('div').innerHTML = cardFinal + card4; 

    }



    for (var i = 0; i < resultado.length; i+= 2) {

        carrinho(resultado);

    }



    for (var i = 0; i < resultado.length; i+= 2) {

        pedidos = pedidos + resultado[i].replace(/-/g, " ") + " " + "(" + resultado[i + 1] + ") " + "\n";

    }



   

    function mandarMsg(){

        var textarea = document.getElementById("exampleFormControlTextarea1").value;

        var nomeInput = document.getElementById("nome").value;

        var endereco = document.getElementById("endereco").value;

        var cupom = document.getElementById("cupom").value;



        if(cupom != ''){

            texto = mensagemOla + nomeInput + nomemsg +"\n\n" + pedidos +"\n" + enderecomsg + endereco + "\n\n" + verificarCupom1 + cupom + verificarCupom2 +"\n\n" +observacao +"\n\n" + textarea;

        }



        else{

            texto = mensagemOla + nomeInput + nomemsg +"\n\n" + pedidos +"\n" + enderecomsg + endereco + "\n\n" +observacao +"\n\n" + textarea;

        }

        



        texto = window.encodeURIComponent(texto);

        window.open("https://api.whatsapp.com/send?phone=" + celular + "&text=" + texto, "_blank");

    }



    function voltar(){

        window.location.assign("http://projetotcc.educacao.ws/app/view/cliente/cardapio.html")

    }