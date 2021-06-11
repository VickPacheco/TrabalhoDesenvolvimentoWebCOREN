function validarCadastro(){
			
	if(document.getElementById("nome").value == ""){
		alert("Campo nome deve ser preenchido");
		return false;
	}else if(document.getElementById("sobrenome").value == ""){
		alert("Campo sobrenome deve ser preenchido");
		return false;
	}else if(document.getElementById("sexo").value == ""){
		alert("Campo sexo deve ser preenchido");
		return false;
	}else if(document.getElementById("cpf").value == ""){
		alert("Campo CPF deve ser preenchido");
		return false;
	}else if(document.getElementById("telefone").value == ""){
		alert("Campo telefone deve ser preenchido");
		return false;
	}else if(document.getElementById("celular").value == ""){
		alert("Campo celular deve ser preenchido");
		return false;
	}else if(document.getElementById("nascimento").value == ""){
		alert("Campo nascimento deve ser preenchido");
		return false;
	}else return true;
}

jQuery(document).ready(function( $ ){
	
	//MÁSCARA DE CAMPOS
	$("#cpf").mask("999.999.999-99");
	$("#celular").mask("(99) 99999-9999");
	$("#telefone").mask("(99) 9999-9999");
		
});