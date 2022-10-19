let $botao = document.getElementById("entrar");
$botao.addEventListener("click",validalogin);

function validalogin(evt){
    evt.preventDefault();
    let $login = document.getElementById("login").value;
    let $senha = document.getElementById("senha").value;

    if($login == ""){
        alert("Obrigatório coloca seu email.");
        document.getElementById("login").focus();
        return false;
    }
    else if($senha == ""){
        alert("Obrigatório coloca sua senha.");
        document.getElementById("senha").focus();
        return false;
    }
    else if(isNaN(parseFloat($senha))){
        alert("Inserir apenas valores numéricos no campo senha");
        document.getElementById("senha").value = "";
        document.getElementById("senha").focus();
        return false;
    }
    else{
        document.frmLogin.action = "validaLogin.php";
        document.frmLogin.submit();
    }
}