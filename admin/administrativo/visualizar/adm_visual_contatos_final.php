<?php
	//$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_categorias_produtos = "SELECT * FROM contatos_final LIMIT 1";
	$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
	$row_categorias_produtos = mysqli_fetch_assoc($resultado_categorias_produtos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Visualizar Contatos Fim do Site</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
		<?php if(isset($row_categorias_produtos)){?>
			<a href="#">
				<button type='button' class='btn btn-sm btn-primary'>Ja cadastrado</button>
			</a>
		<?php }else{?>
			<a href="administrativo.php?link=83">
				<button type='button' class='btn btn-sm btn-success'>Cadastrar</button>
			</a>
		<?php }?>		
			<?php if(isset($row_categorias_produtos)){?>
			<a href="administrativo.php?link=84&id=<?php echo $row_categorias_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-warning">
					Editar
				</button>
			</a>
			
			<a href="administrativo/processa/apaga/adm_apagar_contatos_final.php?id=<?php echo $row_categorias_produtos["id"]; ?>">
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
		<dt>Local: </dt>
		<dd><?php echo $row_categorias_produtos['local']; ?></dd>
		<dt>Emails: </dt>
		<dd><?php echo $row_categorias_produtos['emails']; ?></dd>
		<dt>Telefones: </dt>
		<dd><?php echo $row_categorias_produtos['telefones']; ?></dd>
		<dt>Funcionamento: </dt>
		<dd><?php echo $row_categorias_produtos['funcionamento']; ?></dd>
		<dt>WhatsApp: </dt>
		<dd><?php echo $row_categorias_produtos['whatsapp']; ?></dd>
	</dl>
	<?php }else{?>
	<dl class="dl-horizontal">
		<dt>Nada Cadastrado</dt>
	</dl>
	<?php }?>
</div>