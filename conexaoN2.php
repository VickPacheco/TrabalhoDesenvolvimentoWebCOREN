<?php

if (isset($_POST["acao"])){	

	if ($_POST["acao"]=="inserir"){
		//manter o id_endereco igual ao id da tabela pessoa
		$id_endereco = inserirEndereco();
		inserirPessoa($id_endereco);
		

	}

	if ($_POST["acao"]=="alterar"){

		alterarPessoa();
		alterarEndereco();
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
	$id_endereco = $banco->insert_id;
	$banco->close();

	return $id_endereco;
}


function inserirPessoa($id_endereco){
	//$banco = new mysqli("localhost","root","cadastropessoa");

	$banco = abrirBanco();

	$sql = "INSERT INTO pessoa(tipopessoa, nome, sobrenome, sexo, cpf, telefone, celular, nascimento, id_endereco) VALUES ('{$_POST["opcao"]}','{$_POST["nome"]}','{$_POST["sobrenome"]}','{$_POST["sexo"]}','{$_POST["cpf"]}','{$_POST["telefone"]}','{$_POST["celular"]}','{$_POST["nascimento"]}', $id_endereco)";

	
	$banco->query($sql);
	$banco->close();
}

function mostrarCadastrados(){
	$grupo = array();
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
	$grupo2 = array();
	$banco = abrirBanco();
	$sql = "SELECT * FROM endereco ORDER by cep";
	$resultado = $banco -> query($sql);
	
	//função para mostrar varias linhas do resultado 
	
	while ($row = mysqli_fetch_array($resultado)) {
		$grupo2[] = $row;
	}

	return $grupo2;
}

function alterarPessoa(){
	//$banco = new mysqli("localhost","root", "","cadastropessoa");

	$banco = abrirBanco();

	$sql = "UPDATE pessoa SET tipopessoa= '{$_POST["opcao"]}', nome='{$_POST["nome"]}', sobrenome='{$_POST["sobrenome"]}',sexo = '{$_POST["sexo"]}',cpf = '{$_POST["cpf"]}', telefone='{$_POST["telefone"]}', celular='{$_POST["celular"]}', nascimento= '{$_POST["nascimento"]}' WHERE id='{$_POST["id"]}'";

	$banco->query($sql);

	$banco->close();

}

function alterarEndereco(){
	//$banco = new mysqli("localhost","root", "","cadastropessoa");

	$banco = abrirBanco();

	$sql = "UPDATE endereco SET cep= '{$_POST["cep"]}', rua='{$_POST["rua"]}', numero='{$_POST["numero"]}', complemento = '{$_POST["complemento"]}',referencia = '{$_POST["referencia"]}', bairro='{$_POST["bairro"]}', cidade='{$_POST["cidade"]}', estado= '{$_POST["estado"]}' WHERE id='{$_POST["id_endereco"]}'";


	$banco->query($sql);

	$banco->close();

	voltarIndex();

}

function buscarCadastrado($id){
	$banco = new mysqli("localhost", "root", "", "cadastropessoa");
	$sql = "SELECT * FROM pessoa WHERE id = $id"; 
	$resultado = $banco -> query($sql);
	
	// função para mostrar apenas uma linha no resultado
	$pessoa = mysqli_fetch_assoc($resultado);
	return $pessoa;
}


function buscarEnderecoCadastrado($id){
	$banco = new mysqli("localhost", "root", "", "cadastropessoa");
	$sql = "SELECT * FROM endereco WHERE id= $id";
	$resultado = $banco -> query($sql);
	
	// função para mostrar apenas uma linha no resultado
	$pessoa = mysqli_fetch_assoc($resultado);
	return $pessoa;
}

function voltarIndex(){
	header("Location:index.php");
}

?>