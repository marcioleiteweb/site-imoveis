<?php
	include_once("../../../conexao/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
	$senha_real = mysqli_real_escape_string($conn, $_POST['senha']);
	$senha = md5($senha);
	$whatsapp = mysqli_real_escape_string($conn, $_POST['whatsapp']);
	$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
	$descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
	$select_advogado = mysqli_real_escape_string($conn, $_POST['select_advogado']);
	$select_situacao = mysqli_real_escape_string($conn, $_POST['select_situacao']);
	$select_nivel_acesso = mysqli_real_escape_string($conn, $_POST['select_nivel_acesso']);

	
	$result_usuario = "UPDATE clientes SET nome = '$nome', email = '$email', senha = '$senha', senha_real = '$senha_real', whatsapp = '$whatsapp', cpf = '$cpf', descricao = '$descricao', id_advogado = '$select_advogado', situacoe_id = '$select_situacao', niveis_acesso_id = '$select_nivel_acesso' WHERE id = '$id'";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
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
					alert(\"alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=72'>
				<script type=\"text/javascript\">
					alert(\"não foi alterado.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>