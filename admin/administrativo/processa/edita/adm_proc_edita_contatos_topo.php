<?php
	include_once("../../../conexao/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
	$facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
	$instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
	$linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
	
	$result_categorias_produtos = "UPDATE contatos_topo SET email='$email', telefone='$telefone', facebook='$facebook', instagram='$instagram', linkedin='$linkedin' WHERE id = '$id'";
	
	$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=79'>
				<script type=\"text/javascript\">
					alert(\"alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=79'>
				<script type=\"text/javascript\">
					alert(\"não foi alterado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>