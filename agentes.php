<?php
//$destaque = 1;
	$result_agentes = "SELECT * FROM categorias_produtos";
	$resultado_agentes = mysqli_query($conn , $result_agentes);
?>

  <main id="main">
    <!-- =======Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Corretores</h1>
              <span class="color-text-a">Fale conosco</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="home">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Corretores
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Agents Grid ======= -->
    <section class="agents-grid grid">
      <div class="container">
        <div class="row">
		
		<?php while($row_agentes = mysqli_fetch_assoc($resultado_agentes)){?>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d agente-foto" style="background: url('admin/imgs-sistema/img-corretor/<?php echo $row_agentes['foto'];?>') no-repeat; background-size: cover;">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agente&id=<?php echo $row_agentes['id'];?>" class="link-two">
					  <?php echo $row_agentes['nome'];?>
						</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                   <a href="agente&id=<?php echo $row_agentes['id'];?>" class="btn btn-success" role="button">Conhecer mais</a>
                  </p>
                </div>


              </div>
            </div>
          </div>
		  
		  <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row_agentes['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $row_agentes['nome'];?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  
         <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="<?php echo $row_agentes['facebook'];?>" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="<?php echo $row_agentes['instagram'];?>" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>
      </div>
    </div>
  </div>
</div>
		  
		<?php }?>  
		  
		  
        </div>

		
      </div>
    </section><!-- End Agents Grid-->

  </main><!-- End #main -->
