<!-- footer -->
<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-md-4">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
          <h6 class="footer-title-29">Contacto </h6>
          <p>Av. Cajamarca Sur N°. 925 - San Martin - Rioja - Nueva Cajamarca</p>
          <p class="my-2">Teléfono : <a href="tel:+1(21) 234 4567">042 556362</a></p>
          <p>Email : <a href="mailto:info@example.com">informes@istbm.edu.pe</a></p>
          <div class="main-social-footer-29 mt-4">
            <a href="https://www.facebook.com/institutobmm?locale=es_LA" target="_blank" class="facebook"><span><i class="fab fa-facebook fa-lg"></i></span></a>
            <a href="#twitter" class="twitter"><span><i class="fab fa-twitter fa-lg"></i></span></a>
            <a href="#instagram" class="instagram"><span><i class="fab fa-instagram fa-lg"></i></span></a>

            <!-- <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a> -->

            <a class="btn-wts" href="https://wa.me/51901733995/?text=Quiero%20Información" target="_blank"></a>

          </div>


        </div>

      </div>
    </div>
  </div>
  <!-- copyright -->
  <section class="w3l-copyright text-center">
    <div class="container">
      <p class="copy-footer-29">© <?php echo date("Y") ?>. All rights reserved. Design by <a href="#">IESTBM</a></p>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="ir arriba">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
</section>
<!-- //footer -->
<!-- Load Facebook SDK for JavaScript -->
<!-- <div id="fb-root"></div> -->
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your share button code -->
<?php
$rutas = isset($_GET['ruta']) ? $_GET['ruta'] : $_GET['ruta'] = '';
?>
<div class="fb-share-button" data-href="https://istbm.edu.pe/<?php echo $rutas; ?>" data-layout="button" data-size="small">
</div>