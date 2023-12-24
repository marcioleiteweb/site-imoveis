<?php
	include_once("admin/conexao/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Imobiliaria - MLBN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  
      <!--Inicia o Light Box-->
      <link rel="stylesheet" href="lightbox/css/vlightbox1.css" type="text/css" />
      <link rel="stylesheet" href="lightbox/css/visuallightbox.css" type="text/css" media="screen" />
          
      <script src="lightbox/js/jquery.min.js" type="text/javascript"></script>
      <script src="lightbox/js/visuallightbox.js" type="text/javascript"></script>

      <script src="lightbox/js/thumbscript1.js" type="text/javascript"></script>
      <script src="lightbox/js/vlbdata1.js" type="text/javascript"></script>
    <!--Inicia o Light Box-->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>




  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Ache seu Imóvel</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="imoveis-busca" method="post">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">buscar aqui</label>
              <input type="text"  name="pesquisar" class="form-control form-control-lg form-control-a" placeholder="buscar aqui">
            </div>
          </div>

          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Achar</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Imobiliária<span class="color-b">MLBN</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="quem-somos">Sobre</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="imoveis">Imóveis</a>
          </li>
		  
		  <li class="nav-item">
            <a class="nav-link " href="agentes">Corretores</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="contato">Contato</a>
          </li>
        </ul>
      </div>
	  
	  <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>


    </div>
  </nav><!-- End Header/Navbar -->
  

  
  <?php 
  //include_once("menu.php");
			$url = (isset($_GET['url'])) ? $_GET['url']:'';
			$explode = explode('/',$url);

			$paginas = array('home', 'quem-somos', 'imoveis', 'imovel', 'contato', 'agentes', 'agente', 'contato','imoveis-busca');

		if(isset($explode[0])&& $explode[0] == ''){
			include "home.php";
		}elseif($explode[0]!=''){
			if(isset($explode[0]) && in_array($explode[0],$paginas)){
			include $explode[0].".php";
		}else{
			include "home.php";
			}
		}
	?>



  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Imobiliaria - MLBN</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Facilidade e bom atendimento na busca de seu sonho da casa própria. Conte com nossa equipe especializada para ter a melhor experiência em atendimento imobiliário.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Email .</span> contato@agenciamlbn.com.br
                </li>
                <li class="color-a">
                  <span class="color-text-a">WhatsApp .</span> 11 94823-1840
                </li>
              </ul>
            </div>
          </div>
        </div>	
      </div>
    </div>
  </section>
  
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright 2022
              <span class="color-a">Agencia - MLBN</span> Todos os direitos reservados.
            </p>
          </div>
          <div class="credits">
            Feito com carinho por <a href="https://mlbn.com.br">Agência - MLBN</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>