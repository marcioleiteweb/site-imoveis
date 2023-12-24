<?php
	session_start();
	include_once("conexao/conexao.php");
	//Verifica se os campos possuem dados
	
	if((isset($_POST['txt_usuario'])) && (isset($_POST['txt_senha']))){
			$usuario = mysqli_real_escape_string($conn, $_POST['txt_usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
			$senha = mysqli_real_escape_string($conn, $_POST['txt_senha']);
			$senha = md5($senha);
			
			$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			$resultado = mysqli_fetch_assoc($resultado_usuario);
			
			
			$usuario_adv = mysqli_real_escape_string($conn, $_POST['txt_usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
			$senha_adv = mysqli_real_escape_string($conn, $_POST['txt_senha']);
			$senha_adv = md5($senha_adv);
			
			$result_usuario_adv = "SELECT * FROM vendedores WHERE email = '$usuario_adv' && senha = '$senha_adv'";
			$resultado_usuario_adv = mysqli_query($conn, $result_usuario_adv);
			$resultado_adv = mysqli_fetch_assoc($resultado_usuario_adv);
			
			
			$usuario_cli = mysqli_real_escape_string($conn, $_POST['txt_usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
			$senha_cli = mysqli_real_escape_string($conn, $_POST['txt_senha']);
			$senha_cli = md5($senha_cli);
			
			$result_usuario_cli = "SELECT * FROM clientes WHERE email = '$usuario_cli' && senha = '$senha_cli'";
			$resultado_usuario_cli = mysqli_query($conn, $result_usuario_cli);
			$resultado_cli = mysqli_fetch_assoc($resultado_usuario_cli);
			
			
		//Encontrando um usuário na tabela usuario com os mesmos dados digitado pelo usuario
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			header("Location: administrativo.php");
		}elseif(isset($resultado_adv)){
			$_SESSION['usuarioId_adv'] = $resultado_adv['id'];
			$_SESSION['usuarioNome_adv'] = $resultado_adv['nome'];
			$_SESSION['usuarioNiveisAcessoId_adv'] = $resultado_adv['niveis_acesso_id'];
			$_SESSION['usuarioEmail_adv'] = $resultado_adv['email'];
			header("Location: administrativo.php");
		}elseif(isset($resultado_cli)){
			$_SESSION['usuarioId_cli'] = $resultado_cli['id'];
			$_SESSION['usuarioNome_cli'] = $resultado_cli['nome'];
			$_SESSION['usuarioNiveisAcessoId_cli'] = $resultado_cli['niveis_acesso_id'];
			$_SESSION['usuarioEmail_cli'] = $resultado_cli['email'];
			header("Location: administrativo.php");
		}else{
			$_SESSION['loginErro'] = "USUARIO OU SENHA ERRADOS";
			header("Location: index.php");		
		}
	}else{
		$_SESSION['loginErro'] = "Erro - Entre em contato gmcriacaodesites@gmail.com";
		header("Location: index.php");
	}
?>