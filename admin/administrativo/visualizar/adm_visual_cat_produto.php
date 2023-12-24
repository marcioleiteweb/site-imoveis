<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_categorias_produtos = "SELECT * FROM categorias_produtos WHERE id = '$id' LIMIT 1";
	$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
	$row_categorias_produtos = mysqli_fetch_assoc($resultado_categorias_produtos);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Visualizar Corretor</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=52">
				<button type='button' class='btn btn-sm btn-success'>Listar</button>
			</a>
			
			<a href="administrativo.php?link=55&id=<?php echo $row_categorias_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-warning">
					Editar
				</button>
			</a>
			
			<a href="administrativo/processa/apaga/adm_apagar_cat_produto.php?id=<?php echo $row_categorias_produtos["id"]; ?>">
				<button type="button" class="btn btn-sm btn-danger">
					Apagar
				</button>
			</a>
		</div>
	</div>
	<dl class="dl-horizontal">
		<dt>Id: </dt>
		<dd><?php echo $row_categorias_produtos['id']; ?></dd>
		<dt>Nome: </dt>
		<dd><?php echo $row_categorias_produtos['nome']; ?></dd>
		
		<dt>sobre: </dt>
		<dd><?php echo $row_categorias_produtos['sobre']; ?></dd>
		
		<dt>celular: </dt>
		<dd><?php echo $row_categorias_produtos['celular']; ?></dd>
		
		<dt>email: </dt>
		<dd><?php echo $row_categorias_produtos['email']; ?></dd>
		
		<dt>senha: </dt>
		<dd><?php echo $row_categorias_produtos['senha_mostra']; ?></dd>
		
		<dt>facebook: </dt>
		<dd><?php echo $row_categorias_produtos['facebook']; ?></dd>
		
		<dt>instagram: </dt>
		<dd><?php echo $row_categorias_produtos['instagram']; ?></dd>
		
		<dt>Foto: </dt>
		<dd><img src="imgs-sistema/img-corretor/<?php echo $row_categorias_produtos['foto']; ?>" width="200"></dd>

		<dt>Inserido: </dt>
		<dd><?php 
			if(isset($row_categorias_produtos['created'])){
				$inserido = $row_categorias_produtos['created'];
				echo date('d/m/Y H:i:s', strtotime($inserido)); 
			}?>
		</dd>
		<dt>Alterado: </dt>
		<dd><?php 
			if(isset($row_categorias_produtos['modified'])){				
				echo date('d/m/Y H:i:s',strtotime($row_categorias_produtos['modified'])); 
			} ?>
		</dd>
	</dl>
</div>

<?php
	$result_leads = "SELECT * FROM leads WHERE 	id_categoria = '$id'";
	$resultado_leads = mysqli_query($conn , $result_leads);
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Lista Leads</h1>
	</div>
	<div class="row">
        <div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Id</th>
						<th class="text-center">Nome</th>
						<th class="text-center">Email</th>
						<th class="text-center">WhatsApp</th>
						<th class="text-center">Ação</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row_leads = mysqli_fetch_assoc($resultado_leads)){?>
						<tr>
							<td class="text-center"><?php echo $row_leads["id"]; ?></td>
							<td class="text-center"><?php echo $row_leads["nome"]; ?></td>
							<td class="text-center"><?php echo $row_leads["email"]; ?></td>
							<td class="text-center"><?php echo $row_leads["whatsapp"]; ?></td>
							<td class="text-center">
								<a href="#">
									<button type="button" class="btn btn-xs btn-primary">
										Baixar
									</button>
								</a>
								<a href="#">
									<button type="button" class="btn btn-xs btn-danger">
										Apagar
									</button>
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
        </div>
	</div>
</div>