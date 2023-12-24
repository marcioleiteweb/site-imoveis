<?php
	include_once("../../../conexao/conexao.php");
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$sobre = mysqli_real_escape_string($conn, $_POST['sobre']);
	$celular = mysqli_real_escape_string($conn, $_POST['celular']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
	$senha = md5($senha);
	$senha_mostra = mysqli_real_escape_string($conn, $_POST['senha']);
	$facebook = mysqli_real_escape_string($conn, $_POST['facebook']);
	$instagram = mysqli_real_escape_string($conn, $_POST['instagram']);
	
	
	
	$tmp_file = $_FILES['arquivo']['tmp_name'];
	$new_file = '../../../imgs-sistema/img-corretor/'.time().'.jpg';
	
	if (isset($_FILES['arquivo'])) {
		$file = $_FILES['arquivo'];
		$new_filename = time().'.jpg';
		
		$result_categorias_produtos = "INSERT INTO categorias_produtos (nome, sobre, celular, email, senha, senha_mostra, facebook, instagram, foto, created) VALUES ('$nome','$sobre', '$celular', '$email', '$senha', '$senha_mostra', '$facebook', '$instagram', '$new_filename', NOW())";
		$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
		
		
		if (move_uploaded_file($tmp_file, $new_file)) {
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=52'>
				<script type=\"text/javascript\">
					alert(\"Cadastrado com sucesso!\");
				</script>
			";	
		} else {
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=52'>
				<script type=\"text/javascript\">
					alert(\"Não foi possível cadastrar.\");
				</script>
			";	
		}
	}else{
		echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=52'>
				<script type=\"text/javascript\">
					alert(\"Selecione uma imagem.\");
				</script>
			";	
	}
	
		
?>
<?php $conn->close(); ?>