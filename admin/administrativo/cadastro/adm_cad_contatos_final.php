<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Cadastrar Contatos Final</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=82"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form class="form-horizontal" method="POST" action="administrativo/processa/cadastra/adm_proc_cad_contatos_final.php" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-sm-2 control-label">Local</label>
			<div class="col-sm-10">
				<input type="text" name="local" class="form-control" id="inputEmail3" placeholder="Local">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Emails</label>
			<div class="col-sm-10">
				<input type="text" name="emails" class="form-control" id="inputEmail3" placeholder="Emails">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Telefones</label>
			<div class="col-sm-10">
				<input type="text" name="telefones" class="form-control" id="inputEmail3" placeholder="Telefones">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Funcionamento</label>
			<div class="col-sm-10">
				<input type="text" name="funcionamento" class="form-control" id="inputEmail3" placeholder="Funcionamento">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Whatsapp</label>
			<div class="col-sm-10">
				<input type="text" name="whatsapp" class="form-control" id="inputEmail3" placeholder="Whatsapp só numeros">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		</div>
	</form>
</div>