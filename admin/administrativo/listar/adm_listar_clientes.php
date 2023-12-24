<?php
	$result_cliente = "SELECT * FROM  clientes";
	$resultado_cliente = mysqli_query($conn , $result_cliente);
	if(isset($_SESSION['usuarioId_adv'])){
		$id_adv = $_SESSION['usuarioId_adv'];
	}else{
		$id_adv = "0";
	}
	$result_cliente_associa = "SELECT * FROM  clientes WHERE id_advogado = '$id_adv'";
	$resultado_cliente_associa = mysqli_query($conn , $result_cliente_associa);
	
	if(isset($_SESSION['usuarioNiveisAcessoId'])){
		$id_permissao = $_SESSION['usuarioNiveisAcessoId'];
	}elseif(isset($_SESSION['usuarioNiveisAcessoId_adv'])){
		$id_permissao = $_SESSION['usuarioNiveisAcessoId_adv'];
	}elseif(isset($_SESSION['usuarioNiveisAcessoId_cli'])){
		$id_permissao = $_SESSION['usuarioNiveisAcessoId_cli'];	
	}		
	//Buscar os dados referente ao usuario situado neste id
	$result_permissao = "SELECT * FROM niveis_acessos WHERE id = '$id_permissao' LIMIT 1";
	$resultado_permissao = mysqli_query($conn, $result_permissao);
	$row_categorias_permissao = mysqli_fetch_assoc($resultado_permissao);
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Lista de Clientes</h1>
	</div>
	<div class="row espaco">
		<div class="pull-right">
		<?php if($row_categorias_permissao['gravar'] == 1){?>
			<a href="administrativo.php?link=74"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		<?php }?>
		</div>
	</div>
	<div class="row">
        <div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th class="text-center">Id</th>
						<th class="text-center">Nome Completo</th>
						<th class="text-center">Email</th>
						<th class="text-center">Qual Vendedor</th>
						<th class="text-center">Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php if($id_adv != 0){?>
						<?php while($row_cliente_associa = mysqli_fetch_assoc($resultado_cliente_associa)){?>	
							<tr>
								<td class="text-center"><?php echo $row_cliente_associa["id"]; ?></td>
								<td class="text-center"><?php echo $row_cliente_associa["nome"]; ?></td>
								<td class="text-center"><?php echo $row_cliente_associa["email"]; ?></td>
								<td class="text-center">
								<?php $categorias_produto_associa = $row_cliente_associa["id_advogado"]; 
										$result_categorias_produto_associa = "SELECT * FROM  vendedores WHERE id = '$categorias_produto_associa' LIMIT 1";
										$resultado_categorias_produto_associa = mysqli_query($conn, $result_categorias_produto_associa);
										$row_categorias_produto_associa = mysqli_fetch_assoc($resultado_categorias_produto_associa);
										echo $row_categorias_produto_associa['nome'];
									?>
								</td>
								
								<td class="text-center">
								<?php if($row_categorias_permissao['visualizar'] == 1){?>
									<a href="administrativo.php?link=73&id=<?php echo $row_cliente_associa["id"]; ?>">
										<button type="button" class="btn btn-xs btn-primary">
											Visualizar
										</button>
									</a>
								<?php }?>
								<?php if($row_categorias_permissao['gravar'] == 1){?>
									<a href="administrativo.php?link=75&id=<?php echo $row_cliente_associa["id"]; ?>">
										<button type="button" class="btn btn-xs btn-warning">
											Editar
										</button>
									</a>
								<?php }?>
								<?php if($row_categorias_permissao['deletar'] == 1){?>
									<a href="administrativo/processa/apaga/adm_apagar_clientes.php?id=<?php echo $row_cliente_associa["id"]; ?>">
										<button type="button" class="btn btn-xs btn-danger">
											Apagar
										</button>
									</a>
								<?php }?>
								</td>
							</tr>
						<?php } ?>
					<?php }else{ ?>
						<?php while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){?>	
							<tr>
								<td class="text-center"><?php echo $row_cliente["id"]; ?></td>
								<td class="text-center"><?php echo $row_cliente["nome"]; ?></td>
								<td class="text-center"><?php echo $row_cliente["email"]; ?></td>
								<td class="text-center">
								<?php $categorias_produto = $row_cliente["id_advogado"]; 
										$result_categorias_produto = "SELECT * FROM  vendedores WHERE id = '$categorias_produto' LIMIT 1";
										$resultado_categorias_produto = mysqli_query($conn, $result_categorias_produto);
										$row_categorias_produto = mysqli_fetch_assoc($resultado_categorias_produto);
										echo $row_categorias_produto['nome'];
									?>
								</td>
								
								<td class="text-center">
								<?php if($row_categorias_permissao['visualizar'] == 1){?>
									<a href="administrativo.php?link=73&id=<?php echo $row_cliente["id"]; ?>">
										<button type="button" class="btn btn-xs btn-primary">
											Visualizar
										</button>
									</a>
								<?php }?>
								<?php if($row_categorias_permissao['gravar'] == 1){?>
									<a href="administrativo.php?link=75&id=<?php echo $row_cliente["id"]; ?>">
										<button type="button" class="btn btn-xs btn-warning">
											Editar
										</button>
									</a>
								<?php }?>
								<?php if($row_categorias_permissao['deletar'] == 1){?>
									<a href="administrativo/processa/apaga/adm_apagar_clientes.php?id=<?php echo $row_cliente["id"]; ?>">
										<button type="button" class="btn btn-xs btn-danger">
											Apagar
										</button>
									</a>
								<?php }?>
								</td>
							</tr>
						<?php } ?>
					<?php } ?>
				</tbody>
			</table>
        </div>
	</div>
</div>