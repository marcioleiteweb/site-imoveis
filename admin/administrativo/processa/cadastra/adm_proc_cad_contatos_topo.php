<?php
	include_once("../../../conexao/conexao.php");
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
	$facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
	$instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
	$linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
	
	$result_categorias_produtos = "INSERT INTO contatos_topo (email, telefone, facebook, instagram, linkedin) VALUES ('$email', '$telefone', '$facebook', '$instagram', '$linkedin')";
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
					alert(\"cadastrada com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=79'>
				<script type=\"text/javascript\">
					alert(\"não foi cadastrada.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>