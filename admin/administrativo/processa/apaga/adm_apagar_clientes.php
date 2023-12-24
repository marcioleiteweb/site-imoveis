<?php
	include_once("../../../conexao/conexao.php");
	$id = $_GET['id'];
	
	$result_clientes = "SELECT * FROM tarefas WHERE id_cliente = '$id'";
	$resultado_clientes = mysqli_query($conn , $result_clientes);
	$resultado_cli = mysqli_fetch_assoc($resultado_clientes);
	
	
	if(isset($resultado_cli)){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=72'>
			<script type=\"text/javascript\">
				alert(\"Não pode ser apagado, devido ter tarefas associadas.\");
			</script>
		";
		exit();
	}else{
		$result_categorias_produtos = "DELETE FROM clientes WHERE id = '$id'";
		$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=72'>
				<script type=\"text/javascript\">
					alert(\"apagado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=72'>
				<script type=\"text/javascript\">
					alert(\"não foi apagado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>