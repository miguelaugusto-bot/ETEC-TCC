var digitos = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", 
"P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", 
"8", "9", "0"];

var tamanho_array = digitos.length;

var cupom = "";


function gerarCupom() {
    for (i = 0; i < 5; i++) {
        var n_aleatorio = Math.floor(Math.random() * tamanho_array);
        var digito_aleatorio = digitos[n_aleatorio];
        cupom = cupom + digito_aleatorio;
        document.getElementById('cupom').value = cupom;
    }
    cupom = ''
}

function AlertInseridoComSucesso() {
    alert("Cupom criado com sucesso!");
}

var data = new Date();
var DataAtual = data.getFullYear() + '-' + (data.getMonth()+1) + '-' + data.getDate()
document.getElementById('data').min = DataAtual;

document.getElementById('cupom').value = '';
document.getElementById('data').value = '';
document.getElementById('valor').value = '';

function Mudarestado(el) {
  var display = document.getElementById(el).style.display;

  if (display == "none")
    document.getElementById(el).style.display = 'block';
  else
    document.getElementById(el).style.display = 'none';
}