let $botao = document.getElementById("entrar");
$botao.addEventListener("click",validacadastro);

function validacadastro(evt){
    evt.preventDefault();
    let $nomeCad = document.getElementById("nome").value;
    let $loginCad = document.getElementById("email").value;
    let $senhaCad = document.getElementById("senha").value;

    if($nomeCad == ""){
        alert("Obrigatório coloca seu nome.");
        document.getElementById("nome").focus();
        return false;
    }
    else if($loginCad == ""){
        alert("Obrigatório coloca um email.");
        document.getElementById("email").focus();
        return false;
    }
    else if($senhaCad == ""){
        alert("Obrigatório coloca uma senha.");
        document.getElementById("senha").focus();
        return false;
    }
    else if($nomeCad.length < 10){
        alert("Favor informa o seu nome completo.");
        document.getElementById("nome").focus();
        return false;
    }
    else if(isNaN(parseFloat($senhaCad))){
        alert("Inserir apenas valores numéricos no campo senha");
        document.getElementById("senha").value = "";
        document.getElementById("senha").focus();
        return false;
    }
    else{
        document.frmCadUsu.action = 'cadastroUsu.php';
        document.frmCadUsu.submit();
    }
}