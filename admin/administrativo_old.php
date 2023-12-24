<?php
	session_start();
	include_once("seguranca.php");
	include_once("conexao/conexao.php");
	seguranca_adm();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Marcio Leite Web">
		<link rel="icon" href="imagens/favicon.png">

		<title>Gestão de Dentistas - MLBN</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
		<script type="text/javascript" src="js/javascriptpersonalizado.js"></script>
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

		
	<script>
      tinymce.init({
        selector: '#mytextarea1'
      });
	  tinymce.init({
        selector: '#mytextarea2'
      });
	  tinymce.init({
        selector: '#mytextarea3'
      });
    </script>
		
		 <script src="js/jquery-1.7.2.min.js"></script>
       <script src="js/lightbox.js"></script>

       <link href="css/lightbox.css" rel="stylesheet" />

       <script type="text/javascript">
           $(function () {
               $('#gallery a').lightBox();
           });
        </script>

    <!-- jQuery lightBox plugin - Gallery style */ -->
    <style type="text/css">
	#gallery {
		background-color: #fff;
		padding: 10px;
		width: auto;
		float: left;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #444444;
		border-width: 5px 5px 20px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	</style>
		
	</head>

	<body role="document">
	
		<?php include_once("administrativo/menu_adm.php"); 			
			//adm CRUD
			$pag[1] = "administrativo/adm_home.php";
			$pag[2] = "administrativo/listar/adm_listar_usuario.php";
			$pag[3] = "administrativo/cadastro/adm_cad_usuario.php";
			$pag[4] = "administrativo/editar/adm_editar_usuario.php";
			$pag[5] = "administrativo/visualizar/adm_visual_usuario.php";
			//nivel de acesso CRUD
			$pag[6] = "administrativo/listar/adm_listar_nivel_acesso.php";
			$pag[7] = "administrativo/cadastro/adm_cad_nivel_acesso.php";			
			$pag[8] = "administrativo/editar/adm_editar_nivel_acesso.php";
			//nivel de acesso fim
			$pag[9] = "administrativo/visualizar/adm_visual_nivel_acesso.php";			
			$pag[10] = "administrativo/listar/adm_listar_situacoes.php";
			$pag[11] = "administrativo/cadastro/adm_cad_situacoes.php";			
			$pag[12] = "administrativo/editar/adm_editar_situacoes.php";
			$pag[13] = "administrativo/visualizar/adm_visual_situacoes.php";
			//quem somos CRUD
			$pag[14] = "administrativo/visualizar/adm_visual_quem-somos.php";
			$pag[15] = "administrativo/cadastro/adm_cad_quem_somos.php";
			$pag[16] = "administrativo/editar/adm_editar_quem_somos.php";
			//quem somos fim
			//servicos CRUD
			$pag[18] = "administrativo/cadastro/adm_cad_servicos.php";
			$pag[19] = "administrativo/editar/adm_editar_servicos.php";
			//servicos fim
			//banner-home CRUD
			$pag[20] = "administrativo/listar/adm_listar_banner_home.php";
			$pag[21] = "administrativo/cadastro/adm_cad_banner_home.php";
			$pag[22] = "administrativo/editar/adm_editar_banner_home.php";
			//banner-home fim
			
			//blog CRUD
			$pag[23] = "administrativo/listar/adm_listar_blog.php";
			$pag[24] = "administrativo/visualizar/adm_visual_blog.php";
			$pag[25] = "administrativo/cadastro/adm_cad_blog.php";
			$pag[26] = "administrativo/editar/adm_editar_blog.php";
			//blog fim
			
			//classificados CRUD -Blog
			$pag[27] = "administrativo/listar/adm_listar_classificados.php";
			$pag[28] = "administrativo/visualizar/adm_visual_classificados.php";
			$pag[29] = "administrativo/cadastro/adm_cad_classificados.php";
			$pag[30] = "administrativo/editar/adm_editar_classificados.php";
			//classificados fim
			//estado na home CRUD
			$pag[31] = "administrativo/visualizar/adm_visual_estado_na_home.php";
			$pag[32] = "administrativo/cadastro/adm_cad_estado_na_home.php";
			$pag[33] = "administrativo/editar/adm_editar_estado_na_home.php";
			//estado na home
			//parceiros CRUD
			$pag[34] = "administrativo/listar/adm_listar_parceiros.php";
			$pag[35] = "administrativo/visualizar/adm_visual_parceiros.php";
			$pag[36] = "administrativo/cadastro/adm_cad_parceiros.php";
			//parceiros fim			
			//ads-home CRUD
			$pag[37] = "administrativo/listar/adm_listar_ads_home.php";
			$pag[38] = "administrativo/visualizar/adm_visual_ads_home.php";
			$pag[39] = "administrativo/cadastro/adm_cad_ads_home.php";
			//ads-home fim
			//ads-home-topo CRUD
			$pag[40] = "administrativo/listar/adm_listar_ads_home_topo.php";
			$pag[41] = "administrativo/visualizar/adm_visual_ads_home_topo.php";
			$pag[42] = "administrativo/cadastro/adm_cad_ads_home_topo.php";
			//ads-home-topo fim
			//ads-interna CRUD
			$pag[43] = "administrativo/listar/adm_listar_ads_interna.php";
			$pag[44] = "administrativo/visualizar/adm_visual_ads_interna.php";
			$pag[45] = "administrativo/cadastro/adm_cad_ads_interna.php";
			//ads-interna fim
			//perguntas CRUD
			$pag[46] = "administrativo/cadastro/adm_cad_perguntas.php";
			$pag[47] = "administrativo/editar/adm_editar_perguntas.php";
			//perguntas fim
			//Obras CRUD
			$pag[48] = "administrativo/listar/adm_listar_obras.php";
			$pag[49] = "administrativo/visualizar/adm_visual_obras.php";
			$pag[50] = "administrativo/cadastro/adm_cad_obras.php";
			$pag[51] = "administrativo/editar/adm_editar_obras.php";
			//Obras fim
			
			//base sistema funcionario emprestimos
			
			//Categorias - Funcionarios CRUD
			$pag[52] = "administrativo/listar/adm_listar_funcionarios.php";
			$pag[53] = "administrativo/visualizar/adm_visual_funcionario.php";
			$pag[54] = "administrativo/cadastro/adm_cad_funcionario.php";
			$pag[55] = "administrativo/editar/adm_editar_funcionario.php";
			//Categorias - Funcionarios fim
			//Produtos - Emprestimo CRUD
			$pag[56] = "administrativo/listar/adm_listar_emprestimos.php";
			$pag[57] = "administrativo/visualizar/adm_visual_emprestimos.php";
			$pag[58] = "administrativo/cadastro/adm_cad_emprestimos.php";
			$pag[59] = "administrativo/editar/adm_editar_emprestimos.php";
			//Produtos - Emprestimo fim
			
			//base sistema funcionario emprestimos - fim
			
			//Equipe CRUD
			$pag[60] = "administrativo/listar/adm_listar_membro.php";
			$pag[61] = "administrativo/visualizar/adm_visual_membro.php";
			$pag[62] = "administrativo/cadastro/adm_cad_membro.php";
			$pag[63] = "administrativo/editar/adm_editar_membro.php";
			//Equipe fim
			//trabalhos-membro CRUD
			$pag[64] = "administrativo/listar/adm_listar_trabalhos_membro.php";
			$pag[65] = "administrativo/visualizar/adm_visual_trabalhos_membro.php";
			$pag[66] = "administrativo/cadastro/adm_cad_trabalhos_membro.php";
			$pag[67] = "administrativo/editar/adm_editar_trabalhos_membro.php";
			//trabalhos-membro fim

			//dentistas CRUD
			$pag[68] = "administrativo/listar/adm_listar_advogados.php";
			$pag[69] = "administrativo/visualizar/adm_visual_advogados.php";
			$pag[70] = "administrativo/cadastro/adm_cad_advogados.php";
			$pag[71] = "administrativo/editar/adm_editar_advogados.php";
			//dentistas fim
			
			//clientes CRUD
			$pag[72] = "administrativo/listar/adm_listar_clientes.php";
			$pag[73] = "administrativo/visualizar/adm_visual_clientes.php";
			$pag[74] = "administrativo/cadastro/adm_cad_clientes.php";
			$pag[75] = "administrativo/editar/adm_editar_clientes.php";
			//clientes fim

			//tarefas CRUD
			$pag[76] = "administrativo/visualizar/adm_visual_tarefas.php";
			$pag[77] = "administrativo/cadastro/adm_cad_tarefas.php";
			$pag[78] = "administrativo/editar/adm_editar_tarefas.php";
			//tarefas fim
			
				
			
			if(!empty($_GET["link"])){
				$link = $_GET["link"];
				if(file_exists($pag[$link])){
					include $pag[$link];
				}else{
					include "administrativo/adm_home.php";
				}				
			}else{
				include "administrativo/adm_home.php";
			}
		
		?>
		
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<p>
					Todos os Direitos Reservados: <b>Gestão de Dentistas - MLBN</b> - Feito por:<a href="http://mlbn.com.br/" target="_blank">MLBN - Sistemas</a>
					</p>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
		<script src="js/ckeditor/ckeditor.js"></script>
		<script src="/path/to/tinymce.min.js"></script>
	</body>
</html>
