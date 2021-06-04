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
					<input type="text" name="nome" maxlength="50" />
				</div>

				<div class="row">
					<label class="obrigatorio">Sobrenome</label>
					<input type="text" name="sobrenome" maxlength="100" />
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
					<input type="text" name="cpf" maxlength="14" />
				</div>

				<div class="row">
					<label class="obrigatorio">Telefone</label>
					<input type="text" name="telefone" maxlength="11" />
				</div>

				<div class="row">
					<label class="obrigatorio">Celular</label>
					<input type="text" name="celular" maxlength="11"/>
				</div>

				<div class="row">
					<label class="obrigatorio">Nascimento</label>
					<input type="date" name="nascimento" />
				</div>
		
			</div>
			
			<div class="section">
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

				<div>
					<input type="hidden" name="acao" value="inserir"/>
					<button class="botao" type="submit" name="botao" value="Cadastrar">Cadastrar<b> ></button>
				</div>


</form>