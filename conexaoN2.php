<?php

if (isset($_POST["acao"])){	

	if ($_POST["acao"]=="inserir"){
		
		inserirPessoa();
		inserirEndereco();

	}

	if ($_POST["acao"]=="alterar"){

		alterarPessoa();

	}

}



function abrirBanco(){
	$conexao = new mysqli ("localhost", "root", "", "cadastropessoa");
	return $conexao;
}

function inserirEndereco(){

	$banco = abrirBanco();

	$sql = "INSERT INTO endereco(cep, rua, numero, complemento, referencia, bairro, cidade, estado) VALUES ('{$_POST["cep"]}','{$_POST["rua"]}','{$_POST["numero"]}','{$_POST["complemento"]}','{$_POST["referencia"]}','{$_POST["bairro"]}','{$_POST["cidade"]}','{$_POST["estado"]}')";

	$banco->query($sql);
	$banco->close();
}


function inserirPessoa(){
	//$banco = new mysqli("localhost","root","cadastropessoa");

	$banco = abrirBanco();

	$sql = "INSERT INTO pessoa(tipopessoa, nome, sobrenome, sexo, cpf, telefone, celular, nascimento) VALUES ('{$_POST["opcao"]}','{$_POST["nome"]}','{$_POST["sobrenome"]}','{$_POST["sexo"]}','{$_POST["cpf"]}','{$_POST["telefone"]}','{$_POST["celular"]}','{$_POST["nascimento"]}')";

	$banco->query($sql);
	$banco->close();
}

function mostrarCadastrados(){
	$banco = abrirBanco();
	$sql = "SELECT * FROM pessoa ORDER by nome";
	$resultado = $banco -> query($sql);
	
	//função para mostrar varias linhas do resultado 
	
	while ($row = mysqli_fetch_array($resultado)) {
		$grupo [] = $row;
	}

	return $grupo;
}


function mostrarEnderecos(){
	$banco = abrirBanco();
	$sql = "SELECT * FROM endereco ORDER by cep";
	$resultado = $banco -> query($sql);
	
	//função para mostrar varias linhas do resultado 
	
	while ($row = mysqli_fetch_array($resultado)) {
		$grupo2 [] = $row;
	}

	return $grupo2;
}

function alterarPessoa(){
	$banco = new mysqli("localhost","root", "","cadastropessoa");

	$sql = "UPDATE pessoa SET opcao= '{$_POST["opcao"]}', nome='{$_POST["nome"]}', sobrenome='{$_POST["sobrenome"]}',sexo = '{$_POST["sexo"]}',cpf = '{$_POST["cpf"]}', telefone='{$_POST["telefone"]}', celular='{$_POST["celular"]}', nascimento= '{$_POST["nascimento"]}' WHERE id='{$_POST["id"]}'";

	$banco->query($sql);

	$banco->close();

	voltarIndex();
}

/*
function alterarEndereco(){
	$banco = new mysqli("localhost","root", "","cadastropessoa");

	$sql = "UPDATE pessoa SET cep = '{$_POST["cep"]}', rua= '{$_POST["rua"]}', numero='{$_POST["numero"]}', complemento = '{$_POST["complemento"]}', referencia ='{$_POST["referencia"]}', bairro ='{$_POST["bairro"]}', cidade = '{$_POST["cidade"]}', estado = '{$_POST["estado"]}' WHERE id='{$_POST["id"]}'";

	$banco->query($sql);

	$banco->close();

	voltarIndex();
}
*/

?>