<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Cadastrar Contatos Topo</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=79"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form class="form-horizontal" method="POST" action="administrativo/processa/cadastra/adm_proc_cad_contatos_topo.php" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Telefone</label>
			<div class="col-sm-10">
				<input type="text" name="telefone" class="form-control" id="inputEmail3" placeholder="Telefone">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">facebook</label>
			<div class="col-sm-10">
				<input type="text" name="facebook" class="form-control" id="inputEmail3" placeholder="facebook link">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">instagram</label>
			<div class="col-sm-10">
				<input type="text" name="instagram" class="form-control" id="inputEmail3" placeholder="instagram link">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">linkedin</label>
			<div class="col-sm-10">
				<input type="text" name="linkedin" class="form-control" id="inputEmail3" placeholder="linkedin link">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		</div>
	</form>
</div>