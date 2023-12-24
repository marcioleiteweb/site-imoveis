<?php
	include_once("../../../conexao/conexao.php");
	$id_arquivo = $_GET['id_arquivo'];
	
	//seleciona linha do banco
	$select_arquivo = "SELECT * FROM anexos WHERE id = '$id_arquivo'";
	$resultado_arquivo = mysqli_query($conn, $select_arquivo);
	$exibe_arquivo = mysqli_fetch_assoc($resultado_arquivo);
	
	$id_tarefa = $exibe_arquivo['id_tarefa'];
	
	$pasta_caminho = '../../../imgs-sistema/img-anexos/'.$exibe_arquivo['arquivo'];
	
	$arquivo = $exibe_arquivo['arquivo'];
	
	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if($arquivo != 0){
			//deleta o arquivo na pasta
			unlink($pasta_caminho);
			//deleta a linha do banco das fotos
			$result_blog_album = "DELETE FROM  anexos WHERE id = '$id_arquivo'";
			$resultado_apagar = mysqli_query($conn, $result_blog_album);
			echo "
				
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=76&id=".$id_tarefa."''>
					
				<script type=\"text/javascript\">
					alert(\"apagado com Sucesso.\");
				</script>
			";	 
		}else{
			 echo "
				
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=76&id=".$id_tarefa."''>
				
				<script type=\"text/javascript\">
					alert(\"não foi apagado.\");
				</script>
			";	 
		}
?>
	</body>
</html>
<?php $conn->close(); ?>