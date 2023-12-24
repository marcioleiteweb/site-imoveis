<div class="container theme-showcase" role="main">
	<div class="page-header">
        <h1>Listar Parcerias Clientes</h1>
	</div>
	<div class="row espaco">
		<div class="pull-right">
			<form name="frmBusca" method="post" action="#" >
			<fieldset>
			<!-- Appended Input-->
			<div class="form-group">
			  <div class="col-md-4">
				<div class="input-group">
				  <input id="appendedtext" name="pesquisar" class="form-control" placeholder="buscar" type="text">  
				  <span class="input-group-addon">
				  <input class="btn btn-default" name="SendPesqUser" type="submit" value="Buscar">
				  </span>
				</div>
			  </div>
			</div>
			</fieldset>
			</form>
			<br><br>
		</div>
	</div>
	<div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=99"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		</div>
	</div>
	<br><br>
		<?php
			//busca todos os produtos para exibir de forma geral
			$result_produtos = "SELECT * FROM parcerias";
			$resultado_produtos = mysqli_query($conn, $result_produtos);
			
			//verifica se foi postado uma pesquisa de produto
			if(isset($_POST['pesquisar'])){
				//busca no banco o termo pesquisado
				$pesquisar = $_POST['pesquisar'];
				$result_cursos = "SELECT * FROM parcerias WHERE titulo LIKE '%".$pesquisar."%'";
				$resultado_cursos = mysqli_query($conn, $result_cursos);
			}
		?>
	<div class="container">
		<div class="row margem-topo">
		<?php if(isset($_POST['pesquisar'])){?>
			<?php while($row_produtos_pesquisa = mysqli_fetch_array($resultado_cursos)){?>
			  <div class="col-sm-6 col-md-4" style="float:left;">
				<div class="thumbnail">
				 <div class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto tamanho-quadrado" style="background-image: url('<?php echo 'imgs-sistema/parcerias/'.$row_produtos_pesquisa['foto']; ?>'); height: 100vh; background-size: contain; background-repeat: no-repeat;">
				      </div>
				  <div class="caption">
					<h3><?php echo $row_produtos_pesquisa["titulo"]; ?></h3>
					<p>Link - <b><?php echo $row_produtos_pesquisa["link"]; ?></b></p>
					
					<p>
					<a href="administrativo.php?link=100&id=<?php echo $row_produtos_pesquisa["id"]; ?>" class="btn btn-xs btn-warning">
						Editar
					</a>
					<a href="administrativo/processa/apaga/adm_apagar_parcerias.php?id=<?php echo $row_produtos_pesquisa["id"]; ?>" class="btn btn-xs btn-danger">
						Apagar
					</a>
					</p>
				  </div>
				</div>
			  </div>
			 <?php } ?>
			 <?php }else{?>
				 <?php while($row_produtos = mysqli_fetch_assoc($resultado_produtos)){?>
				  <div class="col-sm-6 col-md-4" style="float:left;">
					<div class="thumbnail">
					  <div class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto tamanho-quadrado" style="background-image: url('<?php echo 'imgs-sistema/parcerias/'.$row_produtos['foto']; ?>'); height: 100vh; background-size: contain; background-repeat: no-repeat;">
					  
				      </div>
					  <div class="caption">
						<h3><?php echo $row_produtos["titulo"]; ?></h3>
						<p>Link - <b><?php echo $row_produtos["link"]; ?></b></p>
						<p>
						<a href="administrativo.php?link=100&id=<?php echo $row_produtos["id"]; ?>" class="btn btn-xs btn-warning">
							Editar
						</a>
						<a href="administrativo/processa/apaga/adm_apagar_parcerias.php?id=<?php echo $row_produtos["id"]; ?>" class="btn btn-xs btn-danger">
							Apagar
						</a>
						</p>
					  </div>
					</div>
				  </div>
				 <?php } ?>
			 <?php } ?>
		</div>
	</div>

</div>