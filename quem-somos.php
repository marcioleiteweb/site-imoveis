<?php
	$id = $_GET['id'];
	//Buscar os dados referente ao usuario situado neste id
	$result_quem_somos = "SELECT * FROM quem_somos LIMIT 1";
	$resultado_quem_somos = mysqli_query($conn, $result_quem_somos);
	$row_quem_somos = mysqli_fetch_assoc($resultado_quem_somos);	
?>

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"><?php echo $row_quem_somos['titulo'];?></h1>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">

          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="admin/imgs-sistema/img-quem-somos/<?php echo $row_quem_somos['foto_principal'];?>" alt="" class="img-fluid">
              </div>

              <div class="col-md-6 col-lg-5 section-md-t3">
                <p class="color-text-a">
               <?php echo $row_quem_somos['texto'];?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
