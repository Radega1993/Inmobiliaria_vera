
<footer class="footer">
  <div class="contact">
    <div class="item_contact">
      <i class='bx bx-copyright contact_icon' ></i>
      <a href="https://www.radega.com">
        <h3 class="contact_title contact_title--white">Radega</h3>
      </a>
    </div>

    <div class="item_contact">
      <i class='bx bx-map contact_icon' ></i>
      <h3 class="contact_title">Calle de la Mar 15</h3>
      <h4 class="contact_title">Felanitx 07200</h4>
      <h4 class="contact_title">Baleares - España</h4>
    </div>

    <div class="item_contact item_contact--gold">
      <i class='bx bx-chat contact_icon contact_icon--modifier' ></i>
      <a href="contact.php">
        <h3 class="contact_title contact_title--black"><?php echo $contactus; ?></h3>
      </a>
      <a href="politica.html">
        <h3 class="contact_title contact_title--black">Política de privacidad y aviso legal</h3>
      </a>
    </div>
  </div>
</footer>

<!-- jQery -->
<script src="./assets/js/jquery-3.4.1.min.js"></script>
<!-- bootstrap js -->
<script src="./assets/js/bootstrap.js"></script>
<script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
<!-- custom js -->
<script src="./assets/js/custom.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
<!-- End Google Map -->
<script>
// if user has already checked the confirmation button
// the alert panel should be hidden.
if (getCookie('accepted') === 'yes') {
    document.getElementById("alert").style.display = "none";
}

// user clicks the confirmation -> set the 'yes' value to cookie and set 'accepted' as name
function accpetCookie() {
    setCookie('accepted', 'yes', 100);
    document.getElementById("alert").style.display = "none";
}

// set cookie method
function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

// get cookie method
function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YT90C1HJPV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YT90C1HJPV');
</script>
</body>
</html>
