function valida(){
	var num = document.getElementById('num');

	if (num.value == ""){
		alert("Campo nome não pode estar em branco.");
	}
	else {
		alert("Nenhum problema foi detectado. Seu formulário pode ser enviado com sucesso.");
	}
}