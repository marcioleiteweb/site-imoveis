<?php
	//$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_categorias_produtos = "SELECT * FROM contatos_topo LIMIT 1";
	$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
	$row_categorias_produtos = mysqli_fetch_assoc($resultado_categorias_produtos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Visualizar Contatos Topo</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
		<?php if(isset($row_categorias_produtos)){?>
			<a href="#">
				<button type='button' class='btn btn-sm btn-primary'>J? cadastrado</button>
			</a>
		<?php }else{?>
			<a href="administrativo.php?link=80">
				<button type='button' class='btn btn-sm btn-success'>Cadastrar</button>
			</a>
		<?php }?>		
			<?php if(isset($row_categorias_produtos)){?>
			<a href="administrativo.php?link=81&id=<?php echo $row_categorias_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-warning">
					Editar
				</button>
			</a>
			
			<a href="administrativo/processa/apaga/adm_apagar_contatos_topo.php?id=<?php echo $row_categorias_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-danger">
					Apagar
				</button>
			</a>
			<?php }?>
		</div>
	</div>
	<?php if(isset($row_categorias_produtos)){?>
	<dl class="dl-horizontal">
		<dt>Id: </dt>
		<dd><?php echo $row_categorias_produtos['id']; ?></dd>
		<dt>Email: </dt>
		<dd><?php echo $row_categorias_produtos['email']; ?></dd>
		<dt>Telefone: </dt>
		<dd><?php echo $row_categorias_produtos['telefone']; ?></dd>
		<dt>facebook: </dt>
		<dd><?php echo $row_categorias_produtos['facebook']; ?></dd>
		<dt>instagram: </dt>
		<dd><?php echo $row_categorias_produtos['instagram']; ?></dd>
		<dt>linkedin: </dt>
		<dd><?php echo $row_categorias_produtos['linkedin']; ?></dd>
	</dl>
	<?php }else{?>
	<dl class="dl-horizontal">
		<dt>Nada Cadastrado</dt>
	</dl>
	<?php }?>
</div>