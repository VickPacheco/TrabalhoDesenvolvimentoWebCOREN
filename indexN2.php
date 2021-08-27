<!DOCTYPE html>

<html>
	<head>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="cssN2.css" media="screen" />
		<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="query.maskedinput.js"></script>
		<script type="text/javascript" src="funcoesN2.js"></script>
		<h1>Formulário de Cadastro N2</h1>
		<meta charset="utf-8">
		<title>Formulário de Cadastro 2</title>
	</head>
	<body style="font-family: helvetica">
		
		<form name="cadastropessoa" action="conexaoN2.php" method="post" onsubmit="return validarCadastro();">
			<div class="section-1">

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
					<input type="text" name="nome" id ="nome" maxlength="50"  placeholder = "Seu nome..."  />
				</div>

				<div class="row">
					<label class="obrigatorio">Sobrenome</label>
					<input type="text" name="sobrenome" maxlength="100" id ="sobrenome" placeholder = "Seu sobrenome..." />
				</div>

				<div class="row">
					<label class="obrigatorio">Sexo</label>
					<select name="sexo" id ="sexo">
						<option value="">Selecione...</option>		
						<option value="f">Feminino</option>
						<option value="m">Masculino</option>
						<option value="o">Outro</option>
					</select>
				</div>

				<div class="row">
					<label class="obrigatorio">CPF</label>
					<input type="text" name="cpf" maxlength="14" id ="cpf" placeholder = "000.000.000-00" />
				</div>

				<div class="row">
					<label class="obrigatorio">Telefone</label>
					<input type="text" name="telefone" maxlength="14" id ="telefone" placeholder = "0000-0000" />
				</div>

				<div class="row">
					<label class="obrigatorio">Celular</label>
					<input type="text" name="celular" maxlength="15" id ="celular" placeholder ="00000-0000" />
				</div>

				<div class="row">
					<label class="obrigatorio">Nascimento</label>
					<input type="date" name="nascimento" id ="nascimento" />
				</div>
		
			</div>
			
			<div class="section-2">
				<p>Endereço de Entrega</p>
				
				<div class="row">
					<label >CEP</label>
					<input type="text" name="cep" maxlength="8" />
				</div>

				<div class="row">
					<label >Rua</label>
					<input type="text" name="rua" maxlength="150" />
				</div>

				<div class="row">
					<label >Número</label>
					<input type="text" name="numero" maxlength="6" />
				</div>

				<div class="row">
					<label >Complemento</label>
					<input type="text" name="complemento" maxlength="100" />
				</div>

				<div class="row">
					<label >Referência</label>
					<input type="text" name="referencia" maxlength="100" />
				</div>

				<div class="row">
					<label >Bairro</label>
					<input type="text" name="bairro" maxlength="50" />
				</div>

				<div class="row">
					<label >Cidade</label>
					<input type="text" name="cidade" maxlength="50" />
				</div>

				<div class="row">
					<label >Estado</label>
					<input type="text" name="estado" maxlength="50"/>
				</div>
			</div>
		
					<input type="hidden" name="acao" value="inserir" />

					<input class="botao" type="submit" name="botao" value="Cadastrar">

					<input onclick="window.location.href = 'listabancoN2.php'" style="text-align:center" class="botao2" name="botao" value="Listar" />
				
			</form>
	</body>
	
</html>