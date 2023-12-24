<?php
	/* aqui ficam os dados de conexao com seu sistema*/
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "imoveis";
	
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
?>
