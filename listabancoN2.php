<?php 
	include("conexaoN2.php");
	$grupo = mostrarCadastrados();
	$grupo2 = mostrarEnderecos();
?>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script type="text/javascript" src="query.maskedinput.js"></script>
<link rel="stylesheet" type="text/css" href="cssN2.css" media="screen"  />	
<script type="text/javascript" src="funcoesN2.js"></script>

<div class="tabela-centro">
		<table border="1">
				<thead>
					<h2>Tabela Pessoa</h2>
					<tr>
						<th class="ocultar-celular">Tipo de Pessoa</th>
						<th>Nome</th>
						<th class="ocultar-celular">Sobrenome</th>
						<th class="ocultar-celular">Sexo</th>				
						<th>CPF</th>
						<th class="ocultar-celular">Telefone</th>
						<th class="ocultar-celular">Celular</th>
						<th class="ocultar-celular">Nascimento</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
				</thead>
				<tbody>

				<?php foreach ($grupo as $pessoa) { ?>
					<tr>
						<td class="ocultar-celular"><?=$pessoa["tipopessoa"]?></td>
						<td><?=$pessoa["nome"]?></td>
						<td class="ocultar-celular"><?=$pessoa["sobrenome"]?></td>
						<td class="ocultar-celular"><?=$pessoa["sexo"]?></td>
						<td><?=$pessoa["cpf"]?></td>
						<td class="ocultar-celular"><?=$pessoa["telefone"]?></td>
						<td class="ocultar-celular"><?=$pessoa["celular"]?></td>
						<td class="ocultar-celular"><?=$pessoa["nascimento"]?></td>


						<td>
							<form name="alterar" action="alterarN2.php?id=<?=$pessoa["id"]?>" method="POST">
								<input type="hidden" name="id" value="<?=$pessoa["id"]?>"/>
								<input class="botao-tabela" type="submit" name="editar" value="Editar"/>
							</form>
						</td>
						<td>
							<form onsubmit ="return confirmaExclusao()" name="excluir" action="conexaoN2.php" method="POST">
								<input type="hidden" name="id" value="<?=$pessoa["id"]?>"/>
								<input type="hidden" name="acao" value="excluir"/>
								<input class="botao-tabela" type="submit" name="excluir" value="Excluir" />
							</form>
						</td>
					</tr>
				<?php } ?>	

				</tbody>
		</table>

		<table border="1" class="ocultar-celular">
				<thead>
					<h2 class="ocultar-celular">Tabela Endereço</h2>
					<tr>
						<th>CEP</th>
						<th>Rua</th>
						<th>Número</th>
						<th>Complemento</th>				
						<th>Referência</th>
						<th>Bairro</th>
						<th>Cidade</th>
						<th>Estado</th>
					</tr>
				</thead>
				<tbody>



				<?php foreach ($grupo2 as $endereco) { ?>
						<tr>
							<td><?=$endereco["cep"]?></td>
							<td><?=$endereco["rua"]?></td>
							<td><?=$endereco["numero"]?></td>
							<td><?=$endereco["complemento"]?></td>
							<td><?=$endereco["referencia"]?></td>
							<td><?=$endereco["bairro"]?></td>
							<td><?=$endereco["cidade"]?></td>
							<td><?=$endereco["estado"]?></td>
						</tr>

				<?php } ?>

				</tbody>
		</table>

		<div>
				<input onclick="window.location.href = 'indexN2.php'" type="button" class="botao3" name="botao" value="Voltar" />
		</div>
</div>
