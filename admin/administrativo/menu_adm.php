<?php
	if(isset($_SESSION['usuarioId_cli'])){
		$id = $_SESSION['usuarioId_cli'];
	}else{
		$id = "0";	
	}
	//Buscar os dados referente ao usuario situado neste id
	$result_cliente = "SELECT * FROM clientes WHERE id = '$id' LIMIT 1";
	$resultado_cliente = mysqli_query($conn, $result_cliente);
	$row_cliente = mysqli_fetch_assoc($resultado_cliente);	
?>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Painel MLBN</span>
        </a>
      </li><!-- End Dashboard Nav -->
	  	 
	  <li class="nav-item">
        <a class="nav-link collapsed" href="administrativo.php">
          <i class="bi bi-briefcase-fill"></i>
          <span>Home</span>
        </a>
      </li><!-- End Profile Page Nav -->
	  
	  
	  <!-- gestao do site -->
	   <li class="nav-item">
        <a class="nav-link collapsed" href="administrativo.php?link=52">
          <i class="bi bi-briefcase-fill"></i>
          <span>Corretores</span>
        </a>
      </li>
	  <li class="nav-item">
        <a class="nav-link collapsed" href="administrativo.php?link=56">
          <i class="bi bi-briefcase-fill"></i>
          <span>Imóveis</span>
        </a>
      </li>
	  
	  

	  <li class="nav-item">
        <a class="nav-link collapsed" href="administrativo.php?link=14">
          <i class="bi bi-briefcase-fill"></i>
          <span>Quem Somos</span>
        </a>
      </li>
	  

	  <?php if($_SESSION['usuarioNiveisAcessoId'] == "1"){?>
		   <li class="nav-item">
			<a class="nav-link collapsed" href="administrativo.php?link=2">
			  <i class="bi bi-briefcase-fill"></i>
			  <span>Listar Usuário</span>
			</a>
		  </li><!-- End Login Page Nav -->

		  <li class="nav-item">
			<a class="nav-link collapsed" href="administrativo.php?link=6">
			  <i class="bi bi-briefcase-fill"></i>
			  <span>Nivel Acesso</span>
			</a>
		  </li><!-- End Error 404 Page Nav -->
	   <?php }?>
	 
      <li class="nav-item">
        <a class="nav-link collapsed" href="sair.php">
          <button type="submit" class="btn btn-success">Sair</button>
        </a>
      </li><!-- End Blank Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->