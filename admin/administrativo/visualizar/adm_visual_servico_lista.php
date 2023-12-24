<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_quem_somos = "SELECT * FROM servico_lista WHERE id = '$id' LIMIT 1";
	$resultado_quem_somos = mysqli_query($conn, $result_quem_somos);
	$row_quem_somos = mysqli_fetch_assoc($resultado_quem_somos);
	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Serviços Lista Unico</h1>
	</div>
		<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">	

			<a href="administrativo.php?link=91" class="btn btn-sm btn-success">
				Listar
			</a>

			
		</div>
	</div>
	
<div class="container theme-showcase" role="main">

	<dl class="dl-horizontal">		
		<dt>Id: </dt>
		<dd><?php echo $row_quem_somos['id']; ?></dd>
		<dt>Titulo: </dt>
		<dd class="alert alert-info" role="alert"><?php echo $row_quem_somos['titulo']; ?>
		
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">	
			<a href="administrativo.php?link=94&id=<?php echo $row_quem_somos["id"];?>" class="btn btn-sm btn-warning">
				edita
			</a>
		</div>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">	
			<a href="administrativo/processa/apaga/adm_apagar_servico_lista.php?id=<?php echo $row_quem_somos["id"];?>" class="btn btn-sm btn-danger">
				Apagar
			</a>
		</div>
	</div>		
		
		</dd>
		<dt>Conteudo: </dt>
		<dd class="alert alert-warning" role="alert"><?php echo $row_quem_somos['texto']; ?></dd>
		<dt>Foto quem somos: </dt>
		<dd class="alert alert-success" role="alert">
		<img width="200" src="imgs-sistema/img-servicos-lista/<?php echo $row_quem_somos['foto_principal']; ?>">
		</dd>	
	</dl>
</div>	
</div>
