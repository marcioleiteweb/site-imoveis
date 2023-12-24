<?php
	$result_imoveis = "SELECT * FROM produtos";
	$resultado_imoveis = mysqli_query($conn , $result_imoveis);
?>
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nossos Imóveis</h1>
              <span class="color-text-a">Grade</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="home">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Imóveis
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

          </div>
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
						</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">Preço | R$ <?php echo $row_imoveis['preco'];?></span>
                    </div>
                    <a href="imovel&id=<?php echo $row_imoveis['id'];?>" class="link-a">saiba mais
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
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->
