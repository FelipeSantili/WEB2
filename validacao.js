//Função de validação do formulário
function validar() {
    var nome = document.getElementById("nome").value;
    var idade = document.getElementById("idade").value;

    console.log(nome);
    console.log(idade);

    if (nome == "" || idade == "") {
        exibeMsgErro("divMsg", "Preencha todos os campos!");
        return false;
    }   
    


    return false;
}

function exibeMsgErro(id, msg){
    var divMsg = document.getElementById(id);
    divMsg.innerHTML = msg;
}