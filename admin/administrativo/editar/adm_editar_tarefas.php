<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_tarefas = "SELECT * FROM tarefas WHERE id = '$id' LIMIT 1";
	$resultado_tarefas = mysqli_query($conn, $result_tarefas);
	$row_tarefas = mysqli_fetch_assoc($resultado_tarefas);	
?>
<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Editar Tarefa</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=72"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form class="form-horizontal" method="POST" action="administrativo/processa/edita/adm_proc_edita_tarefas.php" enctype="multipart/form-data">
	

		<div class="form-group">
			<label class="col-sm-2 control-label">Nome Terefa</label>
			<div class="col-sm-10">
				<input type="text" name="nome_tarefa" required class="form-control" id="inputEmail3" placeholder="Nome Terefa" value="<?php echo $row_tarefas['nome_tarefa']; ?>">
			</div>
		</div>
		
		
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição da Terefa</label>
			<div class="col-sm-10">
				<textarea id="mytextarea1" name="descricao_tarefa" class="form-control" maxlength="800" rows="7" id="inputEmail3" placeholder="Descrição da Terefa" required><?php echo $row_tarefas['descricao_tarefa']; ?></textarea>
			</div>
		</div>	
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Valor</label>
			<div class="col-sm-10">
				<input type="text" name="valor" required class="form-control" id="inputEmail3" placeholder="Valor: Ex: 750,00" value="<?php echo $row_tarefas['valor']; ?>">
			</div>
		</div>
		

		<div class="form-group">
			<label class="col-sm-2 control-label">Status</label>
			<div class="col-sm-10">
				<select class="form-control" name="status_tarefa">
					<option>Selecione</option>	 
						<option value="Em Andamento">Em Andamento</option>
						<option value="Aguardando">Aguardando</option>
						<option value="Orçamento">Orçamento</option>
						<option value="Concluido">Concluido</option>
						<option value="Cancelado">Cancelado</option>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">Cliente</label>
			<div class="col-sm-10">
				<select class="form-control" name="select_cliente">
					<?php
					$id_cliente = $row_tarefas['id_cliente'];
					$result_situacao = "SELECT * FROM clientes WHERE id = '$id_cliente'";
					$result_situacao = mysqli_query($conn, $result_situacao);
					while($row_situacoes = mysqli_fetch_assoc($result_situacao)){ ?> 
						<option value="<?php echo $row_situacoes['id']; ?>"><?php echo $row_situacoes['nome']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Vendedor</label>
			<div class="col-sm-10">
				<select class="form-control" name="select_vendedor">
					<?php	
					$id_vendedor = $row_tarefas['id_advogado'];
					$result_vendedor = "SELECT * FROM vendedores WHERE id = '$id_vendedor'";
					$result_vendedor = mysqli_query($conn, $result_vendedor);
					while($row_vendedor = mysqli_fetch_assoc($result_vendedor)){ ?> 
						<option value="<?php echo $row_vendedor['id']; ?>"><?php echo $row_vendedor['nome']; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>	


		
		<input type="hidden" name="id" value="<?php echo $row_tarefas['id']; ?>">
		<input type="hidden" name="data_criada" value="<?php echo $row_tarefas['data_criada']; ?>">
		<input type="hidden" name="arquivo_old" value="<?php echo $row_tarefas['anexo']; ?>">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning" onclick="return tinyMCE.triggerSave();">Alterar</button>
			</div>
		</div>
	</form>
</div>