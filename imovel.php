<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos = "SELECT * FROM produtos WHERE id = '$id' LIMIT 1";
	$resultado_produtos = mysqli_query($conn, $result_produtos);
	$row_produtos = mysqli_fetch_assoc($resultado_produtos);



		//Buscar os dados referente ao usuario situado neste id
	$result_album = "SELECT * FROM fotos_produtos  WHERE id_produto = '$id'";
	$resultado_album = mysqli_query($conn, $result_album);		
	

?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?php echo $row_produtos['nome'];?></h1>
              <span class="color-text-a"><?php echo $row_produtos['local'];?></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="home">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="imoveis">Imoveis</a>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
		  <div class="row">
			<div class="col-sm">
				<img src="<?php echo 'admin/imagem_produto/';?>/<?php echo $row_produtos['foto'];?>" alt="foto 1" class="img-fluid">
			</div>
		  </div>
	   
	          
    <section class="section-seu-codigo container">
        
        <div class="content">
            
            <div class="box-artigo">
                
                <div id="vlightbox1">
                 <?php while($row_album = mysqli_fetch_assoc($resultado_album)){?>
                    <a class="vlightbox1" id="lightbox-responsiva" href="<?php echo 'admin/imagem_produto/'.$row_produtos['produto_album'];?>/<?php echo $row_album['fotos_produto'];?>" title="Foto 1">
                        <img src="<?php echo 'admin/imagem_produto/'.$row_produtos['produto_album'];?>/<?php echo $row_album['fotos_produto'];?>" alt="foto 1">
                    </a>
				 <?php }?>

                </div><!--Fecha Lightbox-->

            </div><!--Box Artigo-->
        </div>
    </section><!--FECHA BOX HTML-->
<div class="clearfix">.</div>
	

		  

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="bi bi-cash">R$</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c"><?php echo $row_produtos['preco'];?></h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Resumo</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>imovel ID:</strong>
                        <span><?php echo $row_produtos['id'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Localização:</strong>
                        <span><?php echo $row_produtos['local'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        <span>
						<?php echo $row_produtos['area'];?>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>banheiros:</strong>
                        <span><?php echo $row_produtos['banheiros'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>quartos:</strong>
                        <span><?php echo $row_produtos['quartos'];?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Vagas Garagem:</strong>
                        <span><?php echo $row_produtos['vaga_garagem'];?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Descrição</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
					<?php echo $row_produtos['descricao'];?>
                  </p>
                </div>

              </div>
            </div>
          </div>
<?php
	$id_agente = $row_produtos['categorias_produto_id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_corretor = "SELECT * FROM categorias_produtos WHERE id = '$id_agente' LIMIT 1";
	$resultado_corretor = mysqli_query($conn, $result_corretor);
	$row_corretor = mysqli_fetch_assoc($resultado_corretor);	
?>

          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Fale com o Corretor</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img src="admin/imgs-sistema/img-corretor/<?php echo $row_corretor['foto'];?>" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent"><?php echo $row_corretor['nome'];?></h4>
				  
					<p>
						<a class="btn btn-success" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Falar Comigo</a>
                      </p>
				  
                </div>
              </div>
              <div class="col-md-12 col-lg-4">

              </div>
            </div>
          </div>
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
					 <input type="hidden" id="postId" name="id_agente" value="<?php echo $row_corretor['id'];?>">
					 <input type="hidden" id="postId" name="id_imovel" value="<?php echo $row_produtos['id'];?>">
					 <input type="hidden" id="postId" name="deonde" value="imovel">
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
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2"><?php echo $row_corretor['nome'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
	   <div class="agent-content mb-3">
				  <p class="color-text-a">
                   <?php echo $row_corretor['sobre'];?>  
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>WhatsApp:</strong>
                      <span class="color-text-a"><?php echo $row_corretor['celular'];?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a"><?php echo $row_corretor['email'];?></span>
                    </li>
                  </ul>
                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="<?php echo $row_corretor['facebook'];?>">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="<?php echo $row_corretor['instagram'];?>">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>

                    </ul>
                  </div>
      </div>
    </div>
  </div>
</div>
	  
	  
	  
	  
	  
	  
    </section><!-- End Property Single-->

  </main><!-- End #main -->