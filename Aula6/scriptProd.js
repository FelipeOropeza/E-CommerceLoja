let $botao = document.getElementById("entrar");
$botao.addEventListener("click", validaproduto);

function validaproduto(evt){
    evt.preventDefault();
    let $prod = document.getElementById("prod").value;
    let $preco = document.getElementById("preco").value;

    if($prod == ''){
        alert("Obrigatório coloca o nome do produto.");
        document.getElementById("prod").focus();
    }
    else if($preco == ''){
        alert("Obrigatório coloca a preço do produto.");
        document.getElementById("preco").focus();
    }
    else if(isNaN(parseFloat($preco))){
        alert("Só coloca valores númerico no preço");
        document.getElementById("preco").value = '';
        document.getElementById("preco").focus();
    }
    else{
        document.frmCadastroProd.action = 'cadastroProd.php';
        document.frmCadastroProd.submit();
    }
}