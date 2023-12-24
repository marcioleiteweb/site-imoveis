<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_categorias_produtos = "SELECT * FROM contatos_final WHERE id = '$id' LIMIT 1";
	$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
	$row_categorias_produtos = mysqli_fetch_assoc($resultado_categorias_produtos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Editar Contatos Final</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=82"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>

	<form class="form-horizontal" method="POST" action="administrativo/processa/edita/adm_proc_edita_contatos_final.php" enctype="multipart/form-data">		
		<div class="form-group">
			<label class="col-sm-2 control-label">local</label>
			<div class="col-sm-10">
				<input type="text" name="local" class="form-control" id="inputEmail3" value="<?php echo $row_categorias_produtos['local']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">emails</label>
			<div class="col-sm-10">
				<input type="text" name="emails" class="form-control" id="inputEmail3" value="<?php echo $row_categorias_produtos['emails']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">telefones</label>
			<div class="col-sm-10">
				<input type="text" name="telefones" class="form-control" id="inputEmail3" value="<?php echo $row_categorias_produtos['telefones']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">funcionamento</label>
			<div class="col-sm-10">
				<input type="text" name="funcionamento" class="form-control" id="inputEmail3" value="<?php echo $row_categorias_produtos['funcionamento']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">whatsapp</label>
			<div class="col-sm-10">
				<input type="text" name="whatsapp" class="form-control" id="inputEmail3" value="<?php echo $row_categorias_produtos['whatsapp']; ?>">
			</div>
		</div>

		
		<input type="hidden" name="id" value="<?php echo $row_categorias_produtos['id']; ?>">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning">Alterar</button>
			</div>
		</div>
	</form>
</div>