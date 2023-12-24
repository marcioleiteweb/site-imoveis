<?php
	include_once("../../../conexao/conexao.php");
	$id = $_GET['id'];


	//seleciona linha do banco
	$select_produto = "SELECT * FROM tarefas WHERE id = '$id'";
	$resultado_produto = mysqli_query($conn, $select_produto);
	$exibe_produto = mysqli_fetch_assoc($resultado_produto);
	

	//seleciona linha do banco
	$select_anexo = "SELECT * FROM anexos WHERE id_tarefa = '$id' LIMIT 1";
	$resultado_anexo = mysqli_query($conn, $select_anexo);
	$exibe_anexo = mysqli_fetch_assoc($resultado_anexo);
	
	
	if($exibe_produto != 0){
			if($exibe_anexo == 0){	
				//deleta a linha do banco
				$result_categorias_produtos = "DELETE FROM tarefas WHERE id = '$id'";
				$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);	
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
						alert(\"Ops! Não podemos apagar devido ter Anexos Cadastrados!.\");
					</script>
				";
			}
		}else{
			 echo "
				
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=72'>
				
				<script type=\"text/javascript\">
					alert(\"não foi apagado.\");
				</script>
			";	 
		}
?>
<?php $conn->close(); ?>