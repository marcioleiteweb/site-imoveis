<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_situacoes_produtos = "SELECT * FROM situacoes_produtos WHERE id = '$id' LIMIT 1";
	$resultado_situacoes_produtos = mysqli_query($conn, $result_situacoes_produtos);
	$row_situacoes_produtos = mysqli_fetch_assoc($resultado_situacoes_produtos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Editar Situação</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=22"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form class="form-horizontal" method="POST" action="administrativo/processa/adm_proc_edita_situ_produto.php" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome" value="<?php echo $row_situacoes_produtos['nome']; ?>">
			</div>
		</div>
				
		<input type="hidden" name="id" value="<?php echo $row_situacoes_produtos['id']; ?>">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning">Alterar</button>
			</div>
		</div>
	</form>
</div>