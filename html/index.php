<?php
require_once("header.php");
?>

      <section class="container hero_main hero_container">
        <div class="hero_textos">
          <h1 class="title"><?php echo $titulo1; ?> <span class="title--active"><?php echo $titulo2; ?>.</span></h1>
          <p class="copy"><?php echo $subtitulo1; ?> <span
            class="copy--active"><?php echo $subtitulo2; ?></span></p>
          <a href="contact.php" class="cta"><?php echo $contactus; ?></a>
        </div>
      </section>
    </header>

    <main>


    <!-- START SECTION QUIEN SOMOS -->
    <section class="projects container">
      <h2 class="subtitle"><?php echo $weare; ?><span class="point">.</span></h2>
      <article class="container_bg">
        <div class="card">
          <img src="/assets/img/person.jpg" alt="background" class="card_img">
        </div>

        <div class="background">
          <div class="background_text">
          <p class="background_copy"> "<?php echo $longwe; ?>"</p>
          </div>
        </div>
      </section>

      <hr class="solid">

      <!-- END SECTION QUIEN SOMOS -->

      <section class="service_section layout_padding">
        <div class="container">
          <div class="heading_container heading_center">
            <h2 class="subtitle"><?php echo $servicetitle; ?><span class="point">.</span></h2>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="/assets/img/s1.jpg" alt="Asesoramiento Legal">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $service1t; ?>
                  </h5>
                  <p>
                    <?php echo $service1d; ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="/assets/img/s2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $service2t; ?>
                  </h5>
                  <p>
                    <?php echo $service2d; ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="/assets/img/s3.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $service3t; ?>
                  </h5>
                  <p>
                    <?php echo $service3d; ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="/assets/img/s4.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $service4t; ?>
                  </h5>
                  <p>
                    <?php echo $service4d; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- end service section -->


    </main>

    <?php
    require_once("footer.php");
    ?>
