  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
  
<?php
$destaque = 1;
	$result_banner = "SELECT * FROM produtos where id_destaque = '$destaque'";
	$resultado_banner = mysqli_query($conn , $result_banner);
?>

    <div class="swiper-wrapper">
<?php while($row_banner = mysqli_fetch_assoc($resultado_banner)){?>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(admin/imagem_produto/<?php echo $row_banner['foto'];?>)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top"><?php echo $row_banner['local'];?>
                      <br>cod. <?php echo $row_banner['id'];?>
                    </p>
                    <h1 class="intro-title mb-4 ">
                       <a href="imovel&id=<?php echo $row_banner['id'];?>" style="color:#ffffff;"><?php echo $row_banner['nome'];?></a>
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="imovel&id=<?php echo $row_banner['id'];?>"><span class="price-a">valor | R$ <?php echo $row_banner['preco'];?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php }?>	  
	  
	  
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">


    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Imóveis em Destaque</h2>
              </div>
              <div class="title-link">
                <a href="imoveis">Todas os Imóveis
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">
		  
			<?php
			$result_carrossel = "SELECT * FROM produtos where id_destaque = '$destaque'";
			$resultado_carrossel = mysqli_query($conn , $result_carrossel);
			?>	  
		  
		<?php while($row_carrossel = mysqli_fetch_assoc($resultado_carrossel)){?>
            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                
				<div class="img-box-a agente-foto" style="background: url('admin/imagem_produto/<?php echo $row_carrossel['foto'];?>') no-repeat; background-size: cover;">
				</div>
                 
                
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="imovel&id=<?php echo $row_carrossel['id'];?>">
						<?php echo $row_carrossel['nome'];?>
						</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">preço | R$ <?php echo $row_carrossel['preco'];?></span>
                      </div>
                      <a href="imovel&id=<?php echo $row_carrossel['id'];?>" class="link-a">saiba mais
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">área</h4>
                          <span>
						  <?php echo $row_carrossel['area'];?>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Banheiros</h4>
                          <span><?php echo $row_carrossel['banheiros'];?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Quartos</h4>
                          <span><?php echo $row_carrossel['quartos'];?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garagem</h4>
                          <span><?php echo $row_carrossel['vaga_garagem'];?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
		<?php }?>	


			
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->



    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Depoimentos de Clientes</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                        debitis hic ber quibusdam
                        voluptatibus officia expedita corpori.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Paulo & Erika</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                        debitis hic ber quibusdam
                        voluptatibus officia expedita corpori.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Pablo & Sonia</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->