<!DOCTYPE html>

<?php include ("conexaoN2.php");

	if(isset($_GET["id"])){
		$pessoa = buscarCadastrado($_GET["id"]);
		$endereco = buscarEnderecoCadastrado($pessoa["id_endereco"]);
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cssN2.css" media="screen" />

		<h1>Formulário de Alteração de Cadastro N2</h1>
		<meta charset="utf-8">
		<title>Formulário de Alteração de Cadastro</title>
	</head>
	<body style="font-family: helvetica">
		
		<form name="cadastropessoa" action="conexaoN2.php" method="post">
			<div class="section">

				<p>Dados Cadastrais</p>
			
				<div class="form-check">
				<label>&nbsp;</label>
				<label class="radio" >
				<input type="radio" name="opcao" value="fisica" checked="checked" /> Pessoa Física
				</label>
				<label class="radio">	
				<input type="radio" name="opcao" value="juridica"/> Pessoa Jurídica
				</label>
				</div>
				
				<div class="row">
					<label class="obrigatorio">Nome</label>
					<input type="text" name="nome" maxlength="50" value="<?=$pessoa['nome']?>" />
				</div>

				<div class="row">
					<label class="obrigatorio">Sobrenome</label>
					<input type="text" name="sobrenome" maxlength="100" value="<?=$pessoa['sobrenome']?>" />
				</div>

				<div class="row">
					<label class="obrigatorio">Sexo</label>
					<select name="sexo">	
						<option value="f">Feminino</option>
						<option value="m">Masculino</option>
						<option value="o">Outro...</option>
					</select>
				</div>

				<div class="row">
					<label class="obrigatorio">CPF</label>
					<input type="text" name="cpf" maxlength="14" value="<?=$pessoa['cpf']?>" />
				</div>

				<div class="row">
					<label class="obrigatorio">Telefone</label>
					<input type="text" name="telefone" maxlength="11" value="<?=$pessoa['telefone']?>" />
				</div>

				<div class="row">
					<label class="obrigatorio">Celular</label>
					<input type="text" name="celular" maxlength="11" value="<?=$pessoa['celular']?>" />
				</div>

				<div class="row">
					<label class="obrigatorio">Nascimento</label>
					<input type="date" name="nascimento" value="<?=$pessoa['nascimento']?>" />
				</div>
		
			</div>
			
			<div class="section">
				<p>Endereço de Entrega</p>
				
				<div class="row">
					<label >CEP</label>
					<input type="text" name="cep" maxlength="8" value="<?=$endereco['cep']?>" />
				</div>

				<div class="row">
					<label >Rua</label>
					<input type="text" name="rua" maxlength="150" value="<?=$endereco['rua']?>" />
				</div>

				<div class="row">
					<label >Número</label>
					<input type="text" name="numero" maxlength="6" value="<?=$endereco['numero']?>" />
				</div>

				<div class="row">
					<label >Complemento</label>
					<input type="text" name="complemento" maxlength="100" value="<?=$endereco['complemento']?>" />
				</div>

				<div class="row">
					<label >Referência</label>
					<input type="text" name="referencia" maxlength="100" value="<?=$endereco['referencia']?>" />
				</div>

				<div class="row">
					<label >Bairro</label>
					<input type="text" name="bairro" maxlength="50" value="<?=$endereco['bairro']?>" />
				</div>

				<div class="row">
					<label >Cidade</label>
					<input type="text" name="cidade" maxlength="50" value="<?=$endereco['cidade']?>" />
				</div>

				<div class="row">
					<label >Estado</label>
					<input type="text" name="estado" maxlength="50" value="<?=$endereco['estado']?>" />
				</div>
			</div>

				
					<input type="hidden" name="acao" value="alterar"/>
					<input type="hidden" name="id" value="<?=$pessoa['id']?>"/>
					<input type="hidden" name="id_endereco" value="<?=$endereco['id']?>"/>

					<input class="botao" type="submit" name="botao" value="Alterar" />

				
				
					<input onclick="window.location.href = 'listabancoN2.php'" style="text-align:center" class="botao2" name="botao" value="Listar" />
				
			</form>
	</body>
</html>

<?php } ?>