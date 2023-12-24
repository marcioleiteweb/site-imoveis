<?php
	include_once("../../../conexao/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$sobre = mysqli_real_escape_string($conn, $_POST['sobre']);
	$celular = mysqli_real_escape_string($conn, $_POST['celular']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
	$senha = md5($senha);
	$senha_mostra = mysqli_real_escape_string($conn, $_POST['senha']);
	$facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
	$instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
	
	
	
	//Buscar os dados referente ao usuario situado neste id
	$result_deleta_foto_antiga = "SELECT * FROM categorias_produtos WHERE id = '$id' LIMIT 1";
	$resultado_deleta_foto_antiga = mysqli_query($conn, $result_deleta_foto_antiga);
	$row_deleta_foto_antiga = mysqli_fetch_assoc($resultado_deleta_foto_antiga);	
	
	
	
	$foto_antiga = '../../../imgs-sistema/img-corretor/'.$row_deleta_foto_antiga['foto'];
	
	$criado = $row_deleta_foto_antiga['created'];
	
	$tmp_file = $_FILES['arquivo']['tmp_name'];
	$new_file = '../../../imgs-sistema/img-corretor/'.time().'.jpg';
	
	if (isset($_FILES['arquivo'])) {
		
		$file = $_FILES['arquivo'];
		$new_filename = time().'.jpg';
		
		$result_categorias_produtos = "UPDATE categorias_produtos SET nome='$nome',sobre='$sobre',celular='$celular',email='$email',senha='$senha',senha_mostra='$senha_mostra',facebook='$facebook',instagram='$instagram',foto='$new_filename', created='$criado', modified = NOW() WHERE id = '$id'";
		$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
		
		if(mysqli_affected_rows($conn) != 0){
			
			unlink("$foto_antiga");
		
			if (move_uploaded_file($tmp_file, $new_file)) {
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=52'>
					<script type=\"text/javascript\">
						alert(\"Alterado com sucesso!\");
					</script>
				";	
			} else {
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=52'>
					<script type=\"text/javascript\">
						alert(\"Não foi possível alterar. Selecione uma Foto\");
					</script>
				";	
			}
		}
	}else{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=52'>
				<script type=\"text/javascript\">
					alert(\"Não foi possivel alterar.\");
				</script>
			";	
	}
	
		
?>
<?php $conn->close(); ?>