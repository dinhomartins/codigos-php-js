function valida(){

	//Variavel recebe o nome do input
	// var name = document.getElementById('nomeDoInput').value;
	var nome = document.getElementById('nome').value;
	var email = document.getElementById('email').value;
	var senha = document.getElementById('senha').value;

	// Verifica se o campo é vazio
	if(nome == "") {
	//  Chama um alert caso campo for vazio
		alert("Preencha o nome");
	//  nomeDoForm.campo.focus();
		cadastro.nome.focus();
		return false;
	} else  if (email == "") {
		alert("Preencha o email");
		cadastro.email.focus();
		return false;
	} else  if (senha == "") {
		alert("Preencha a senha");
		cadastro.senha.focus();
		return false;
	}

}

function validaLogin(){

	var emailLogin = login.emailLogin.value;
	var senhaLogin = login.senhaLogin.value;

	if(emailLogin == "") {
		alert("Preencha o email de login");
		login.emailLogin.focus();
		return false;
	} else  if (senhaLogin == "") {
		alert("Preencha a senha de login");
		login.senhaLogin.focus();
		return false;
	}

}
// Btn
<input type="submit" class="btn btn-primary" name="logar" value="Acessar" onclick="validaLogin()">