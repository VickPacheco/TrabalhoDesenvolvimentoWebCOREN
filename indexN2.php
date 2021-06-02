<link rel="stylesheet" type="text/css" href="cssN2.css" media="screen" />


<!DOCTYPE html>

<html>
	<head>
		<h1 style="font-family: helvetica">Formulário de Cadastro N2</h1>
		<meta charset="utf-8">
		<title>Formulário de Cadastro</title>
	</head>
	<body>
	
		<form method="post" action="" style="font-family: helvetica">
			<div class="section">
				<p>Dados Cadastrais</p>
			
				<div class="form-check">
				<label>&nbsp;</label>
				<label class="radio" >
				<input type="radio" name="opcao" value="opcao1" checked="checked" /> Pessoa Física
				</label>
				<label class="radio">	
				<input type="radio" name="opcao" value="opcao2"/> Pessoa Jurídica
				</label>
				</div>
				
				<div class="row">
					<label class="obrigatorio obrigatorio">Nome</label>
					<input type="text" name="nome" value=""/>
				</div>

				<div class="row">
					<label class="obrigatorio obrigatorio">Sobrenome</label>
					<input type="text" name="sobrenome" value=""/>
				</div>

				<div class="row">
					<label class="obrigatorio">Sexo</label>
					<select name="sexo">	
						<option value="0" selected>Selecione...</option>
						<option value="feminino">Feminino</option>
						<option value="masculino">Masculino</option>
						<option value="outros">Outros...</option>
					</select>
				</div>

				<div class="row">
					<label class="obrigatorio">CPF</label>
					<input type="text" name="cpf" value=""/>
				</div>

				<div class="row">
					<label class="obrigatorio">Telefone</label>
					<input type="text" name="telefone" value=""/>
				</div>

				<div class="row">
					<label class="obrigatorio">Celular</label>
					<input type="text" name="celular" value=""/>
				</div>

				<div class="row">
					<label class="obrigatorio">Nascimento</label>
					<input type="text" name="celular" value=""/>
				</div>
		
			</div>
			
			<div class="section">
				<p>Endereço de Entrega</p>
				
				<div class="row">
					<label >CEP</label>
					<input type="text" name="cep" value=""/>
				</div>

				<div class="row">
					<label >Rua</label>
					<input type="text" name="rua" value=""/>
				</div>

				<div class="row">
					<label >Número</label>
					<input type="text" name="sobrenome" value=""/>
				</div>

				<div class="row">
					<label >Complemento</label>
					<input type="text" name="complemento" value=""/>
				</div>

				<div class="row">
					<label >Referência</label>
					<input type="text" name="referencia" value=""/>
				</div>

				<div class="row">
					<label >Bairro</label>
					<input type="text" name="bairro" value=""/>
				</div>

				<div class="row">
					<label >Cidade</label>
					<input type="text" name="cidade" value=""/>
				</div>

				<div class="row">
					<label >Estado</label>
					<input type="text" name="estado" value=""/>
				</div>
			</div>

				<div>
					<input class="botao" type="submit" name="botao" value="Cadastrar" />
				</div>
			</form>
	</body>
</html>