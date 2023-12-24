<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_categorias_produtos = "SELECT * FROM categorias_produtos WHERE id = '$id' LIMIT 1";
	$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
	$row_categorias_produtos = mysqli_fetch_assoc($resultado_categorias_produtos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Editar Corretor</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=52"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form class="form-horizontal" method="POST" action="administrativo/processa/edita/adm_proc_edita_cat_produto.php" enctype="multipart/form-data">

	<div class="form-group">
			<label class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" value="<?php echo $row_categorias_produtos['nome']; ?>">
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Sobre</label>
				<div class="col-sm-10">
					<textarea id="mytextarea1" name="sobre" class="tinymce-editor" maxlength="900" rows="5" id="inputEmail3" placeholder="Sobre" required>
					<?php echo $row_categorias_produtos['sobre']; ?>
					</textarea>
				</div>
			</div>
			<label class="col-sm-2 control-label">celular</label>
			<div class="col-sm-10">
				<input type="text" name="celular" class="form-control" id="inputEmail3" placeholder="celular" value="<?php echo $row_categorias_produtos['celular']; ?>">
			</div>
			<label class="col-sm-2 control-label">email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="email" value="<?php echo $row_categorias_produtos['email']; ?>">
			</div>
			<label class="col-sm-2 control-label">senha</label>
			<div class="col-sm-10">
				<input type="password" name="senha" class="form-control" id="inputEmail3" placeholder="senha">
			</div>
			<label class="col-sm-2 control-label">facebook</label>
			<div class="col-sm-10">
				<input type="text" name="facebook" class="form-control" id="inputEmail3" placeholder="facebook" value="<?php echo $row_categorias_produtos['facebook']; ?>">
			</div>
			<label class="col-sm-2 control-label">instagram</label>
			<div class="col-sm-10">
				<input type="text" name="instagram" class="form-control" id="inputEmail3" placeholder="instagram" value="<?php echo $row_categorias_produtos['instagram']; ?>">
			</div>
		</div>
		<div class="form-group">
		
			<label for="inputEmail3" class="col-sm-2 control-label">foto</label>
			<label for="inputEmail3" class="col-sm-2 control-label">arquivos jpg</label>
			<div class="col-sm-10">
				<input type="file" name="arquivo" accept="image/jpg">
			</div>
		</div>
		
		<input type="hidden" name="id" value="<?php echo $row_categorias_produtos['id']; ?>">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning" onclick="return tinyMCE.triggerSave();">Alterar</button>
			</div>
		</div>
	</form>
</div>