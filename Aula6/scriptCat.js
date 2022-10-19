let $botao = document.getElementById("entrar");
$botao.addEventListener("click", validacategoria);

function validacategoria(evc){
    evc.preventDefault();
    let $cat = document.getElementById("cat").value;

    if($cat == ''){
        alert("Obrigatório coloca a categoria.");
        document.getElementById("cat").focus();
    }
    else{
        document.frmCadastroCat.action = 'cadastroCat.php';
        document.frmCadastroCat.submit();
    }
}