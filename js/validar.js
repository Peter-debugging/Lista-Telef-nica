var textBoxNome = window.document.getElementById("nome");
var textBoxTelefone = document.getElementById("telefone");
var buttonSalvar = document.getElementById("salvar");
var mensagemNome = document.getElementById("mensagemnome");
var mensagemTelefone = document.getElementById("mensagemtelefone");

textBoxNome.addEventListener("focus", iniciarTimerNome);
textBoxTelefone.addEventListener("focus", iniciarTimerTelefone);

habilitarBotaoSalvar();


function iniciarTimerNome(){
    window.setInterval(Nome, 1000);
}
function iniciarTimerTelefone(){
    window.setInterval(Telefone, 1000);
}
function habilitarBotaoSalvar(){
    if(!validarNome() || !validarTelefone()){
        buttonSalvar.disabled =  true;
    }else{
        buttonSalvar.disabled =  false;
    }    
}
function Nome(){
    mensagemNome.hidden = validarNome();
    habilitarBotaoSalvar();
}
function Telefone(){
    mensagemTelefone.hidden = validarTelefone();
    habilitarBotaoSalvar();
}
function validarNome(){
    var nome = textBoxNome.value;
    return !(nome.length <3 || nome.length > 30);
}
function validarTelefone(){
    var telefone = textBoxTelefone.value;
    return !(telefone.length <3 || telefone.length > 15);
}