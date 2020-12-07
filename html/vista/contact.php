

    <main>
      <!-- contact section -->
      <section class="contact_section  ">
        <div class="container">
          <div class="heading_container heading_center">
            <h2 class="subtitle">Contacta con nosotros<span class="point">.</span></h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form_container">
                <form action="">
                  <div>
                    <input type="text" placeholder="Nombre" required/>
                  </div>
                  <div>
                    <input type="text" placeholder="Telefono" required/>
                  </div>
                  <div>
                    <input type="email" placeholder="Correo electronico" required/>
                  </div>
                  <div>
                    <input type="text" class="message-box" placeholder="Mensaje" required/>
                  </div>
                  <div class="btn_box">
                    <button>
                      Enviar
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
    require_once("./vista/footer.php");
    ?>

  </body>
</html>
