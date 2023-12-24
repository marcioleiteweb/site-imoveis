<?php
	include_once("../../../conexao/conexao.php");
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$nome_tarefa = mysqli_real_escape_string($conn, $_POST['nome_tarefa']);
	$descricao_tarefa = mysqli_real_escape_string($conn, $_POST['descricao_tarefa']);
	$data_criada = mysqli_real_escape_string($conn, $_POST['data_criada']);
	$status_tarefa = mysqli_real_escape_string($conn, $_POST['status_tarefa']);
	$select_cliente = mysqli_real_escape_string($conn, $_POST['select_cliente']);
	$select_vendedor = mysqli_real_escape_string($conn, $_POST['select_vendedor']);
	$valor = mysqli_real_escape_string($conn, $_POST['valor']);
	
	
	$result_usuario = "UPDATE tarefas SET nome_tarefa = '$nome_tarefa', descricao_tarefa = '$descricao_tarefa', data_criada = '$data_criada', status_tarefa = '$status_tarefa', id_cliente = '$select_cliente', id_advogado = '$select_vendedor', valor = '$valor' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

	if(mysqli_affected_rows($conn) != 0){
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=72'>
		<script type=\"text/javascript\">
			alert(\"foi cadastrado com sucesso!.\");
		</script>
	"; 
	}else{
		//echo"nao foi";
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../../administrativo.php?link=72'>
			<script type=\"text/javascript\">
				alert(\"foi cadastrado!.\");
			</script>
		";
	}
?>
<?php $conn->close(); ?>