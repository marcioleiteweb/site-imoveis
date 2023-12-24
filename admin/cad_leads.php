<?php
	include_once("conexao/conexao.php");
	$id_agente = mysqli_real_escape_string($conn, $_POST['id_agente']);
	$id_imovel = mysqli_real_escape_string($conn, $_POST['id_imovel']);
	$deonde = mysqli_real_escape_string($conn, $_POST['deonde']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$whatsapp = mysqli_real_escape_string($conn, $_POST['whatsapp']);


$numero_ale = date('YmdHi');

		$result_categorias_produtos = "INSERT INTO leads (id_categoria, nome, email, whatsapp) VALUES ('$id_agente', '$nome', '$email', '$whatsapp')";
		$resultado_categorias_produtos = mysqli_query($conn, $result_categorias_produtos);
		
		
		if(mysqli_affected_rows($conn) != 0){
				if("$deonde" == "agente"){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../agente&id=".$id_agente."&cad=".$numero_ale."'>
					<script type=\"text/javascript\">			
						alert(\"Cadastrado com sucesso!\");
					</script>
				";
				}elseif("$deonde" == "imovel"){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../imovel&id=".$id_imovel."&cad=".$numero_ale."'>
					<script type=\"text/javascript\">			
						alert(\"Cadastrado com sucesso!\");
					</script>
				";	
				}			
		} else {
				if("$deonde" == "agente"){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../agente&id=".$id_agente."'>
					<script type=\"text/javascript\">			
						alert(\"Não foi possível cadastrar.\");
					</script>
				";
				}elseif("$deonde" == "imovel"){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../imovel&id=".$id_imovel."'>
					<script type=\"text/javascript\">			
						alert(\"Não foi possível cadastrar.\");
					</script>
				";	
				}	
		}
	
		
?>
<?php $conn->close(); ?>