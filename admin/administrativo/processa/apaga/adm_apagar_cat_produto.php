<?php
	include_once("../../../conexao/conexao.php");
	$id = $_GET['id'];
	
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos_verifica = "SELECT * FROM produtos";
	$resultado_produtos_verifica = mysqli_query($conn, $result_produtos_verifica);
	
	//seleciona linha do banco
	$select_produto = "SELECT * FROM categorias_produtos WHERE id = '$id'";
	$resultado_produto = mysqli_query($conn, $select_produto);
	$exibe_produto = mysqli_fetch_assoc($resultado_produto);
	
	//caminho fisico da foto numa variavel
	$pasta_caminho = '../../../imgs-sistema/img-corretor/'.$exibe_produto['foto'];
	
	
	while($row_produtos_verifica = mysqli_fetch_assoc($resultado_produtos_verifica)){
	$produto_vinculado = $row_produtos_verifica["categorias_produto_id"];
	}
	if($id == $produto_vinculado){
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=52'>
				<script type=\"text/javascript\">
					alert(\"Categoria não pode ser apagada enquanto houver produtos atrelado a ela.\");
				</script>
			";
	}else{
		$result_categorias_produtos = "DELETE FROM categorias_produtos WHERE id = '$id'";
		$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
		//apaga a foto da pasta
		unlink($pasta_caminho);
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=52'>
				<script type=\"text/javascript\">
					alert(\"apagado com Sucesso.\");
				</script>
			";	
	}	
?>
<?php $conn->close(); ?>