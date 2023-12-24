<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Cadastrar Corretor</h1>
	</div>
	<div class="row">
		<div class="pull-right" style="padding-bottom: 20px; ">
			<a href="administrativo.php?link=52"><button type='button' class='btn btn-sm btn-success'>Listar</button></a>
		</div>
	</div>
	<form class="form-horizontal" method="POST" action="administrativo/processa/cadastra/adm_proc_cad_cat_produto.php" enctype="multipart/form-data">
	
	
		<div class="form-group">
			<label class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome">
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Sobre</label>
				<div class="col-sm-10">
					<textarea id="mytextarea1" name="sobre" class="tinymce-editor" maxlength="900" rows="5" id="inputEmail3" placeholder="Sobre" required></textarea>
				</div>
			</div>
			<label class="col-sm-2 control-label">celular</label>
			<div class="col-sm-10">
				<input type="text" name="celular" class="form-control" id="inputEmail3" placeholder="celular">
			</div>
			<label class="col-sm-2 control-label">email</label>
			<div class="col-sm-10">
				<input type="text" name="email" class="form-control" id="inputEmail3" placeholder="email">
			</div>
			<label class="col-sm-2 control-label">senha</label>
			<div class="col-sm-10">
				<input type="password" name="senha" class="form-control" id="inputEmail3" placeholder="senha">
			</div>
			<label class="col-sm-2 control-label">facebook</label>
			<div class="col-sm-10">
				<input type="text" name="facebook" class="form-control" id="inputEmail3" placeholder="facebook">
			</div>
			<label class="col-sm-2 control-label">instagram</label>
			<div class="col-sm-10">
				<input type="text" name="instagram" class="form-control" id="inputEmail3" placeholder="instagram">
			</div>
		</div>
		<div class="form-group">
		
			<label for="inputEmail3" class="col-sm-2 control-label">foto</label>
			<label for="inputEmail3" class="col-sm-2 control-label">arquivos jpg</label>
			<div class="col-sm-10">
				<input type="file" name="arquivo" accept="image/jpg">
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success" onclick="return tinyMCE.triggerSave();">Cadastrar</button>
			</div>
		</div>
	</form>
</div>