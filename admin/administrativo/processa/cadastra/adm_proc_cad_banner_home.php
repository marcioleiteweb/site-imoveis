<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> 
		<?php
		include_once("../../../conexao/conexao.php");
		$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
		$texto = mysqli_real_escape_string($conn, $_POST['texto']);
		$link = mysqli_real_escape_string($conn, $_POST['link']);
	
						
		//Pasta onde o arquivo vai se salvo
		$_UP['pasta'] = '../../../imgs-sistema/banner-home/';
		
		//Tamanho máximo do arquivo em Bytes
		$_UP['tamanho'] = 1024*1024*800; //2mb
		
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
			die("Não foi possivel fazer o upload, erro: <br>". $_UP['erros'][$_FILES['arquivo']['error']]);
			exit; //para a execução do script
		}
		
		//Verfica se houve algum erro com o upload. Se sim, exibe mensagem de erro
		if($_FILES['arquivo2']['error'] != 0){
			die("Não foi possivel fazer o upload, erro: <br>". $_UP['erros'][$_FILES['arquivo2']['error']]);
			exit; //para a execução do script
		}
		
		 //Fazer a verificacao da extensão do arquivo
		$extensao = strtolower(end(explode('.',$_FILES['arquivo']['name'])));
		if(array_search($extensao, $_UP['extensoes']) === false){	
			 echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
				<script type=\"text/javascript\">
					alert(\"Extensão do arquivo inválida.\");
				</script>
			"; 	
		}
		
			 //Fazer a verificacao da extensão do arquivo
		$extensao = strtolower(end(explode('.',$_FILES['arquivo2']['name'])));
		if(array_search($extensao, $_UP['extensoes']) === false){	
			 echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
				<script type=\"text/javascript\">
					alert(\"Extensão do arquivo inválida.\");
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
		
		//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta arquivo
		else{
			//Verificar se deve trocar o nome do arquivo
			if($_UP['renomeia'] == true){
				//Criar um nome baseado no UNIX TIMESTAMP atual e com a extensão jpg
				$nome_final = time().'.jpg';
				$nome_final2 = time().'b.jpg';
			}else{
				//Mantem o nome original do arquivo
				$nome_final = $_FILES['arquivo']['name'];
			}
			//Verificar se é possivel mover o arquivo para a pasta escolhida
			if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)){
				if(move_uploaded_file($_FILES['arquivo2']['tmp_name'], $_UP['pasta'].$nome_final2)){
				}
				//echo"$nome_final";
				//Upload efetuado com sucesso
				$result_produtos = "INSERT INTO  banner_home (titulo, texto, foto, logo, link) VALUES ('$titulo', '$texto', '$nome_final', '$nome_final2', '$link')";
				$resultado_produtos = mysqli_query($conn, $result_produtos);
				
				if(mysqli_affected_rows($conn) != 0){
					//echo"foi";
			  	echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
					<script type=\"text/javascript\">
						alert(\"foi cadastrado com sucesso!.\");
					</script>
				"; 
				}else{
					//echo"nao foi";
				 	echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
						<script type=\"text/javascript\">
							alert(\"foi cadastrado!.\");
						</script>
					";
				}
			}else{
				//Upload não foi efetuado com sucesso
				 echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=20'>
					<script type=\"text/javascript\">
						alert(\"não foi cadastrado.\");
					</script>
				"; 
			}
		}?>
	</body>
</html>
<?php $conn->close(); ?>