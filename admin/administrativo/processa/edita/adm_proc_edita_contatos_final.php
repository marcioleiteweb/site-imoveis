<?php
	include_once("../../../conexao/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$local = mysqli_real_escape_string($conn, $_POST['local']);
	$emails = mysqli_real_escape_string($conn, $_POST['emails']);
	$telefones = mysqli_real_escape_string($conn, $_POST['telefones']);
	$funcionamento = mysqli_real_escape_string($conn, $_POST['funcionamento']);
	$whatsapp = mysqli_real_escape_string($conn, $_POST['whatsapp']);
	
	$result_categorias_produtos = "UPDATE contatos_final SET local='$local', emails='$emails', telefones='$telefones', funcionamento='$funcionamento', whatsapp='$whatsapp' WHERE id = '$id'";
	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=82'>
				<script type=\"text/javascript\">
					alert(\"alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=82'>
				<script type=\"text/javascript\">
					alert(\"não foi alterado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>