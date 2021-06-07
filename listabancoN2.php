<?php 
	include("conexaoN2.php");
	$grupo = mostrarCadastrados();
	$grupo2 = mostrarEnderecos();
?>

<link rel="stylesheet" type="text/css" href="cssN2.css" media="screen" />	

<div class="tabela-centro">
	<table border="1">
			<thead>
				<h2>Tabela Pessoa</h2>
				<tr>
					<th>Tipo de Pessoa</th>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>Sexo</th>				
					<th>CPF</th>
					<th>Telefone</th>
					<th>Celular</th>
					<th>Nascimento</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
			</thead>
			<tbody>

			<?php foreach ($grupo as $pessoa) { ?>
				<tr>
					<td><?=$pessoa["tipopessoa"]?></td>
					<td><?=$pessoa["nome"]?></td>
					<td><?=$pessoa["sobrenome"]?></td>
					<td><?=$pessoa["sexo"]?></td>
					<td><?=$pessoa["cpf"]?></td>
					<td><?=$pessoa["telefone"]?></td>
					<td><?=$pessoa["celular"]?></td>
					<td><?=$pessoa["nascimento"]?></td>


					<td>
						<form name="alterar" action="alterarN2.php?id=<?=$pessoa["id"]?>" method="POST">
							<input type="hidden" name="id" value="<?=$pessoa["id"]?>"/>
							<input class="botao-tabela" type="submit" name="editar" value="Editar"/>
						</form>
					</td>
					<td>
						<form name="excluir" action="conexao.php" method="POST">
							<input type="hidden" name="id" value="<?=$pessoa["id"]?>"/>
							<input type="hidden" name="acao" value="excluir"/>
							<input class="botao-tabela" type="submit" name="excluir" value="Excluir"/>
						</form>
					</td>
				</tr>
			<?php } ?>	

			</tbody>
	</table>

	<table border="1">
			<thead>
				<h2>Tabela Endereço</h2>
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
</div>
				<div>
					<button onclick="window.location.href = 'indexN2.php'" type="button" class="botao3" name="botao">Voltar</button>
				</div>
