<?php
	include_once("../../../conexao/conexao.php");
	$id = $_GET['id'];
	
	//seleciona linha do banco
	$select_produto = "SELECT * FROM quem_somos WHERE id = '$id'";
	$resultado_produto = mysqli_query($conn, $select_produto);
	$exibe_produto = mysqli_fetch_assoc($resultado_produto);
	
	$pasta_caminho = '../../../imgs-sistema/img-quem-somos/'.$exibe_produto['foto_principal'];
	//echo "$pasta_caminho";
		
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if($exibe_produto != 0){
			//deleta o arquivo na pasta
			unlink($pasta_caminho);
			//deleta a linha do banco
			$result_produtos = "DELETE FROM quem_somos WHERE id = '$id'";
			$resultado_apagar = mysqli_query($conn, $result_produtos);
			echo "
				
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=14'>
			
				<script type=\"text/javascript\">
					alert(\"apagado com Sucesso.\");
				</script>
			";	 
		}else{
			 echo "
				
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=14'>
				
				<script type=\"text/javascript\">
					alert(\"não foi apagado.\");
				</script>
			";	 
		}
?>
	</body>
</html>
<?php $conn->close(); ?>