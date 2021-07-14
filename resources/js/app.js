function validar(){
    var senha = formCad.senha.value;
    var csenha = formCad.Csenha.value;

    if(csenha == senha){
        formCad.submit();
    }
    else{
        document.getElementById('alertasenha').style.display = 'block';
    }
}