<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos = "SELECT * FROM categorias_produtos WHERE id = '$id' LIMIT 1";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	$row_produtos = mysqli_fetch_assoc($resultado_produtos);

?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?php echo $row_produtos['nome'];?></h1>
              <span class="color-text-a">Agente Immobiliaria</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="home">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="agentes">Corretores</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?php echo $row_produtos['nome'];?>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <div class="agent-avatar-box">
                  <img src="admin/imgs-sistema/img-corretor/<?php echo $row_produtos['foto'];?>" alt="" class="agent-avatar img-fluid">
                </div>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                    <div class="title-box-d">
                      <h3 class="title-d">
					<?php echo $row_produtos['nome'];?>
                      </h3>
                    </div>
                  </div>
				  
                  <div class="agent-content mb-3">
                    <p class="content-d color-text-a">
						<?php echo $row_produtos['sobre'];?>  
						</p>
                    <div class="info-agents color-a">
                      <p>
						<a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Falar Comigo</a>
                      </p>
                    </div>
                  </div>
				  
				  
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Cadastrar Antes</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
				<form action="admin/cad_leads.php" method="post">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="nome" class="form-control form-control-lg form-control-a" placeholder="Nome" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="whatsapp" class="form-control form-control-lg form-control-a" placeholder="WhatsApp" required>
                      </div>
                    </div>
					 <input type="hidden" id="postId" name="id_agente" value="<?php echo $row_produtos['id'];?>">
					 <input type="hidden" id="postId" name="deonde" value="agente">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-a">Cadastrar</button>
                    </div>
                  </div>
                </form>
			
      </div>
    </div>
  </div>
</div>
<?php
if(isset($_GET['cad'])){
	$cad = $_GET['cad'];
}else{
	$cad = 0;
}
?>
	<script type="text/javascript">
		function abreModal() {
		//funcao nova de chamar modal bootstrap 5		
			var staticBackdrop = document.getElementById('exampleModalToggle3');
			var myModal = new bootstrap.Modal(staticBackdrop);
			myModal.show();
		}
		if(<?php echo $cad;?> === <?php echo date('YmdHi');?>){
			setTimeout(abreModal, 2000);				
		}
	</script>


<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2"><?php echo $row_produtos['nome'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
	   <div class="agent-content mb-3">
                    <p class="content-d color-text-a">
						<?php echo $row_produtos['sobre'];?>  
						</p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>WhatsApp: </strong>
                        <span class="color-text-a"> <?php echo $row_produtos['celular'];?> </span>
                      </p>
                      <p>
                        <strong>Email: </strong>
                        <span class="color-text-a"> <?php echo $row_produtos['email'];?> </span>
                      </p>
     
                    </div>
                </div>
				
			    <div class="socials-footer">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="<?php echo $row_produtos['facebook'];?>" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
 
                      <li class="list-inline-item">
                        <a href="<?php echo $row_produtos['instagram'];?>" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
       
                    </ul>
                 </div>
      </div>
    </div>
  </div>
</div>

				    
				  

                </div>
              </div>
            </div>
          </div>
		  
<?php
	$id_agente = $row_produtos['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_imoveis = "SELECT * FROM produtos WHERE categorias_produto_id = '$id_agente'";
	$resultado_imoveis = mysqli_query($conn, $result_imoveis);
	//$row_imoveis = mysqli_fetch_assoc($resultado_imoveis);	
?>		  
		  
          <div class="col-md-12 section-t8">
            <div class="title-box-d">
              <h3 class="title-d">Meus Imoveis</h3>
            </div>
          </div>
          <div class="row property-grid grid">
		  
		  
		 <?php while($row_imoveis = mysqli_fetch_assoc($resultado_imoveis)){?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow">
			 
			  <div class="img-box-a agente-foto" style="background: url('admin/imagem_produto/<?php echo $row_imoveis['foto'];?>') no-repeat; background-size: cover;">
				</div>

                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="imovel&id=<?php echo $row_imoveis['id'];?>">
						<?php echo $row_imoveis['nome'];?>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Preço | R$ <?php echo $row_imoveis['preco'];?></span>
                      </div>
                      <a href="imovel&id=<?php echo $row_imoveis['id'];?>" class="link-a">veja mais
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area:</h4>
                          <span class="text-center">
							<?php echo $row_imoveis['area'];?>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Banheiros:</h4>
                          <span class="text-center"><?php echo $row_imoveis['banheiros'];?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Quartos:</h4>
                          <span class="text-center"><?php echo $row_imoveis['quartos'];?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garagem:</h4>
                          <span class="text-center"><?php echo $row_imoveis['vaga_garagem'];?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
		 <?php }?>
			
			

			
			
			
          </div>
        </div>
      </div>
    </section><!-- End Agent Single -->

  </main><!-- End #main -->