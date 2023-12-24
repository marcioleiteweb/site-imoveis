<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos = "SELECT * FROM produtos WHERE id = '$id' LIMIT 1";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	$row_produtos = mysqli_fetch_assoc($resultado_produtos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Editar Imovel</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=56"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form class="form-horizontal" method="POST" action="administrativo/processa/edita/adm_proc_edita_produto.php" enctype="multipart/form-data">
	
	
			<div class="form-group">
			<label class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" name="nome" class="form-control" id="inputEmail3" value="<?php echo $row_produtos['nome']; ?>" placeholder="Nome do Imovel">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Localização</label>
			<div class="col-sm-10">
				<input type="text" name="local" class="form-control" id="inputEmail3" value="<?php echo $row_produtos['local']; ?>" placeholder="Localização">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Preço</label>
			<div class="col-sm-10">
				<input type="text" name="preco" class="form-control" id="inputPassword3" value="<?php echo $row_produtos['preco']; ?>" placeholder="Preço Ex: 250.000.00">
			</div>
		</div>	
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Area</label>
			<div class="col-sm-10">
				<input type="text" name="area" class="form-control" id="inputPassword3" value="<?php echo $row_produtos['area']; ?>" placeholder="350m2">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Banheiros</label>
			<div class="col-sm-10">
				<input type="text" name="banheiros" class="form-control" id="inputPassword3" value="<?php echo $row_produtos['banheiros']; ?>" placeholder="2">
			</div>
		</div>		
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Quartos</label>
			<div class="col-sm-10">
				<input type="text" name="quartos" class="form-control" id="inputPassword3" value="<?php echo $row_produtos['quartos']; ?>" placeholder="4">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Vaga Garagem</label>
			<div class="col-sm-10">
				<input type="text" name="vaga_garagem" class="form-control" id="inputPassword3" value="<?php echo $row_produtos['vaga_garagem']; ?>" placeholder="3">
			</div>
		</div>
		
		
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição</label>
			<div class="col-sm-10">
				<textarea id="mytextarea1" name="descricao" class="tinymce-editor" maxlength="900" rows="10" id="inputEmail3" placeholder="Descrição do Imovel" required>
				<?php echo $row_produtos['descricao']; ?>
				</textarea>
			</div>
		</div>	
		
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Imagem</label>
			<div class="col-sm-10">
				<input name="arquivo" type="file"/>
			</div>
		</div>	
		
		<?php $categorias_produto_id = $row_produtos['categorias_produto_id']; ?>
		<div class="form-group">
			<label class="col-sm-2 control-label">Categoria do Produto</label>
			<div class="col-sm-10">
				<select class="form-control" name="categorias_produto_id">
					<option>Selecione</option>
					<?php
					$result_categorias_produtos = "SELECT * FROM categorias_produtos";
					$result_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
					while($row_categorias_produtos = mysqli_fetch_assoc($result_categorias_produtos)){ ?> 
						<option value="<?php echo $row_categorias_produtos['id']; ?>"<?php
						if($categorias_produto_id == $row_categorias_produtos['id']){
							echo 'selected';
						}?> >						
						<?php echo $row_categorias_produtos['nome']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>	
		
		<?php $situacoes_produto_id =  $row_produtos['situacoes_produto_id']; ?>
		<div class="form-group">
			<label class="col-sm-2 control-label">Situação do Produto</label>
			<div class="col-sm-10">
				<select class="form-control" name="situacoes_produto_id">
					<option>Selecione</option>
					<?php
					$result_situacoes_produtos = "SELECT * FROM situacoes_produtos";
					$result_situacoes_produtos = mysqli_query($conn, $result_situacoes_produtos);
					while($row_situacoes_produtos = mysqli_fetch_assoc($result_situacoes_produtos)){ ?> 
							<option value="<?php echo $row_situacoes_produtos['id']; ?>"
							<?php if($situacoes_produto_id == $row_situacoes_produtos['id']){
								echo 'selected';
							}?> >						
							<?php echo $row_situacoes_produtos['nome']; ?></option>
						<?php } ?>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Em Destaque</label>
			<div class="col-sm-10">
				<select class="form-control" name="id_destaque">
						<option value="1">Sim</option>
						<option value="0">Não</option>
				</select>
			</div>
		</div>
		
		<input type="hidden" name="id" value="<?php echo $row_produtos['id']; ?>">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning" onclick="return tinyMCE.triggerSave();">Alterar</button>
			</div>
		</div>
	</form>
</div>