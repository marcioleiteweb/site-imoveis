<?php
	include_once("../../../conexao/conexao.php");
	$id = $_GET['id'];
	
	if (isset($id)){
		$result_categorias_produtos = "DELETE FROM contatos_final WHERE id = '$id'";
		$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=82'>
				<script type=\"text/javascript\">
					alert(\"apagado com Sucesso.\");
				</script>
			";
	}else{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=82'>
				<script type=\"text/javascript\">
					alert(\"nao apagado.\");
				</script>
			";
	}			
?>
<?php $conn->close(); ?>