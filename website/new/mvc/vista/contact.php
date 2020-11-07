

    <main>
      <!-- START SECTION FORMULARIO -->
    <section class="form">
      <div class="container">
        <h3 class="subtitle">¿Contacta con nosotros?</h3>

        <form action="#" class="contact_form">
          <div class="half left contact_form">
              <input type="text" class="name_input"  placeholder="Nombre" required>
              <input type="email" class="mail_input" placeholder="Correo electronico" required>
              <input type="text" class="subject_input" placeholder="Asunto" required>
          </div>
          <div class="half right contact_form">
              <textarea name="message" type="text" class="msg" placeholder="Mensaje" required></textarea>
          </div>
              <input type="submit" class="contact_button" value="Enviar">
        </form>

      </div>
    </section>
    <!-- END SECTION FORMULARIO -->
    </main>

    <?php
    require_once("./vista/footer.php");
    ?>

  </body>
</html>
