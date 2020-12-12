<?php
require_once("header.php");
?>

    <main>
      <!-- contact section -->
      <section class="contact_section  ">
        <div class="container">
          <div class="heading_container heading_center">
            <h2 class="subtitle"><?php echo $contactus; ?><span class="point">.</span></h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form_container">
                <form action="">
                  <div>
                    <input type="text" placeholder="Name" required/>
                  </div>
                  <div>
                    <input type="text" placeholder="Telefon" required/>
                  </div>
                  <div>
                    <input type="email" placeholder="Email" required/>
                  </div>
                  <div>
                    <input type="text" class="message-box" placeholder="Messaje" required/>
                  </div>
                  <div class="btn_box">
                    <button>
                      <?php echo $enviar; ?>
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="map_container">
                <div class="map">
                  <div id="googleMap"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end contact section -->
    </main>

    <?php
    require_once("footer.php");
    ?>
