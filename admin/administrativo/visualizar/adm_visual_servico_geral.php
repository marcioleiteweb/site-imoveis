<?php
	//Buscar os dados referente ao usuario situado neste id
	$result_quem_somos = "SELECT * FROM servico_geral";
	$resultado_quem_somos = mysqli_query($conn, $result_quem_somos);
	
		//Buscar os dados referente ao usuario situado neste id
	$result_quem_somos2 = "SELECT * FROM servico_geral";
	$resultado_quem_somos2 = mysqli_query($conn, $result_quem_somos2);
	$row_quem_somos2 = mysqli_fetch_assoc($resultado_quem_somos2);
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Serviços Geral</h1>
	</div>
		<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">	
		<?php if(isset($row_quem_somos2)){?>
			<a href="#" class="btn btn-sm btn-primary">
				Esta cadastrado
			</a>
		<?php }else{?>	
			<a href="administrativo.php?link=89" class="btn btn-sm btn-success">
				Cadastrar
			</a>
		<?php }?>	
			
		</div>
	</div>
	
<?php while($row_quem_somos = mysqli_fetch_assoc($resultado_quem_somos)){?>
<div class="container theme-showcase" role="main">

	<dl class="dl-horizontal">		
		<dt>Id: </dt>
		<dd><?php echo $row_quem_somos['id']; ?></dd>
		<dt>Titulo: </dt>
		<dd class="alert alert-info" role="alert"><?php echo $row_quem_somos['titulo']; ?>
		
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">	
			<a href="administrativo.php?link=90&id=<?php echo $row_quem_somos["id"];?>" class="btn btn-sm btn-warning">
				edita
			</a>
		</div>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">	
			<a href="administrativo/processa/apaga/adm_apagar_servico_geral.php?id=<?php echo $row_quem_somos["id"];?>" class="btn btn-sm btn-danger">
				Apagar
			</a>
		</div>
	</div>		
		
		</dd>
		<dt>Conteudo: </dt>
		<dd class="alert alert-warning" role="alert"><?php echo $row_quem_somos['texto']; ?></dd>
		<dt>Foto quem somos: </dt>
		<dd class="alert alert-success" role="alert">
		<img width="200" src="imgs-sistema/img-servicos/<?php echo $row_quem_somos['foto_principal']; ?>">
		</dd>	
	</dl>
</div>	
</div>
<?php }?>
