<?php
	include_once("../../../conexao/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
	$texto = mysqli_real_escape_string($conn, $_POST['texto']);
	$link = mysqli_real_escape_string($conn, $_POST['link']);

	
	//echo "id do produto". $id."<br><br>";
	
		 //Pasta onde o arquivo vai se salvo
		$_UP['pasta'] = '../../../imgs-sistema/banner-home/';
		
		//Tamanho máximo do arquivo em Bytes
		$_UP['tamanho'] = 1024*1024*200; //2mb
		
		//Array com as extensões permitido
		$_UP['extensoes'] = array('png','jpg','jpeg','gif');
		
		//Renomeia o arquivo? (se true, o arquivo será salvo como .jpg e em nome único)
		$_UP['renomeia'] = true;
		
		//Array com os tipos de erros de upload do PHP
		$_UP['erros'][0] = 'Não houve erro';
		$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
		$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
		$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
		$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
		
		//Verfica se houve algum erro com o upload. Se sim, exibe mensagem de erro
		if($_FILES['arquivo']['error'] != 0){
		
		//seleciona linha do banco
		$select_produto = "SELECT * FROM banner_home WHERE id = '$id'";
		$resultado_produto = mysqli_query($conn, $select_produto);
		$exibe_produto = mysqli_fetch_assoc($resultado_produto);
	
		$caminho_produto = $exibe_produto['foto'];
		$caminho_logo = $exibe_produto['logo'];
		//$produto_album = $exibe_produto['produto_album'];
		//echo "$caminho_produto";
	
		//exit;
		
		$result_usuario = "UPDATE banner_home SET titulo='$titulo', texto = '$texto', foto = '$caminho_produto', logo = '$caminho_logo',link = '$link' WHERE id = '$id'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		echo "
			
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
			
				<script type=\"text/javascript\">
					alert(\"Somente dados alterados.\");
				</script>
			";
		die("Não foi possivel fazer o upload, erro: <br>". $_UP['erros'][$_FILES['arquivo']['error']]);	
		die("Não foi possivel fazer o upload, erro: <br>". $_UP['erros'][$_FILES['arquivo2']['error']]);
		echo "
			
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
			
				<script type=\"text/javascript\">
					alert(\"Somente dados alterados.\");
				</script>
			";		
		exit; //para a execução do script
		}
		
		 //Fazer a verificacao da extensão do arquivo
		$extensao = strtolower(end(explode('.',$_FILES['arquivo']['name'])));
		if(array_search($extensao, $_UP['extensoes']) === false){	
			echo "
			
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
			
				<script type=\"text/javascript\">
					alert(\"Extensão da imagem inválida.\");
				</script>
			";	
		}
		 //Fazer a verificacao da extensão do arquivo
		$extensao = strtolower(end(explode('.',$_FILES['arquivo2']['name'])));
		if(array_search($extensao, $_UP['extensoes']) === false){	
			echo "
			
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
			
				<script type=\"text/javascript\">
					alert(\"Extensão da imagem inválida.\");
				</script>
			";	
		}
		
		//Fazer a verificação do tamanho do arquivo
		elseif($_UP['tamanho'] < $_FILES['arquivo']['size']){	
			echo "
			
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
				
				<script type=\"text/javascript\">
					alert(\"O arquivo enviado é muito grande, envie arquivos até 2mb. \");
				</script>
			";	
		}
		//Fazer a verificação do tamanho do arquivo
		elseif($_UP['tamanho'] < $_FILES['arquivo2']['size']){	
			echo "
			
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
				
				<script type=\"text/javascript\">
					alert(\"O arquivo enviado é muito grande, envie arquivos até 2mb. \");
				</script>
			";	
		}
		
		//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
		else{
			//seleciona linha do banco
			$select_produto = "SELECT * FROM banner_home WHERE id = '$id'";
			$resultado_produto = mysqli_query($conn, $select_produto);
			$exibe_produto = mysqli_fetch_assoc($resultado_produto);
			
			$caminho_pasta2 = '../../../imgs-sistema/banner-home/'.$exibe_produto['foto'];
			$caminho_pasta2logo = '../../../imgs-sistema/banner-home/'.$exibe_produto['logo'];
			$foto_produto = $exibe_produto['foto'];
			
			//echo "$caminho_pasta2";
			//Verificar se deve trocar o nome do arquivo
			if($_UP['renomeia'] == true){
				//Criar um nome baseado no UNIX TIMESTAMP atual e com a extensão jpg
				$nome_final = time().'.jpg';
				$nome_final2 = time().'b.jpg';
				//verifica se existe a foto antiga
				if($foto_produto != 0){
				//echo"deleta foto antiga";
				//deleta foto antiga
				echo unlink("$caminho_pasta2");	
				echo unlink("$caminho_pasta2logo");	
				} 
				
			}else{
				//Mantem o nome original do arquivo
				$nome_final = $_FILES['arquivo']['name'];
				
			}
			
		}
		
		if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)){
			if(move_uploaded_file($_FILES['arquivo2']['tmp_name'], $_UP['pasta'].$nome_final2)){
			}
				$result_usuario = "UPDATE banner_home SET titulo='$titulo', texto = '$texto', foto = '$nome_final', logo = '$nome_final2',link = '$link' WHERE id = '$id'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
				
				if(mysqli_affected_rows($conn) != 0){
			 	echo "
					
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
					
					<script type=\"text/javascript\">
						alert(\"foi cadastrado com sucesso.\");
					</script>
				";
				}else{
				 	echo "
					
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
						
						<script type=\"text/javascript\">
							alert(\"não foi cadastrado1.\");
						</script>
					";
				}
			}else{
				//Upload não foi efetuado com sucesso
				 echo "
				 
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
					
					<script type=\"text/javascript\">
						alert(\"não foi cadastrado2.\");
					</script>
				";
			}
		
		
		
?>
<?php $conn->close(); ?>