<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" type="image/png" sizes="76x76" href="vistas/img/logo/logo.png">
    <?php 
    $rutasall = 'IST BUENAVENURA MESTANZA';
if(isset($_GET['ruta']) && $_GET['ruta'] == 'contacto'){
  $rutasall = 'ISTBM | Contáctese';
}if(isset($_GET['ruta']) && $_GET['ruta'] == 'carreras'){
  $rutasall = 'ISTBM | Carreras Profesionales';
}if(isset($_GET['ruta']) && $_GET['ruta'] == 'inscripcion'){
  $rutasall = 'ISTBM | Inscripciones';
} 
?>
    <title><?php echo $rutasall ?></title>
   
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Bootstrap CSS -->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/pack/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="vistas/pack/bower_components/font-awesome/css/font-awesome.min.css"> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/pack/bower_components/Ionicons/css/ionicons.min.css"> 
   <!-- Template CSS --> 

 <link rel="stylesheet" href="vistas/pack/bower_components/fontawesome-free/css/all.css">
 
    <link rel="stylesheet" href="vistas/assets/css/style-starter.css">
    <link rel="stylesheet" href="vistas/css/form.css">
    <link rel="stylesheet" href="vistas/css/menu.css">

<!-- DATEPICKER -->
<link rel="stylesheet" href="vistas/pack/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
 



<!-- Template JavaScript -->
<!-- <script src="vistas/assets/js/jquery-3.3.1.min.js"></script> -->
<!-- jQuery 3 -->
<script src="vistas/pack/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="vistas/assets/js/bootstrap.min.js"></script>
    <!-- DTEPICKER -->
<!-- DTEPICKER -->
<!-- daterangepicker -->
<script src="vistas/pack/bower_components/moment/min/moment.min.js"></script>
<script src="vistas/pack/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- DTEPICKER -->
<script src="vistas/pack/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="vistas/pack/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>

<script src="vistas/pack/mask/jquery.mask.js"></script>

  </head>
<body class="">


<?php

  
    /*=============================================
    CABEZOTE
    =============================================*/


include "modulos/header.php";

echo "<div id='contenedorTotal'";
    /*=============================================
    MENU
    =============================================*/

    // include "modulos/menu.php";

    /*=============================================
    CONTENIDO
    =============================================*/

    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "carreras" ||
          $_GET["ruta"] == "inscripcion" ||
         $_GET["ruta"] == "contacto"){

        include "modulos/".$_GET["ruta"].".php";

      }else{

        // include "modulos/404.php";

      }

    }else{

       include "modulos/index.php";

    }

 
  

    // include "modulos/index.php";


echo '</div>';
   /*=============================================
    FOOTER
    =============================================*/
if(!empty($_GET['ruta']) &&  $_GET["ruta"] == "inscripcion"){

}else{
    include "modulos/footer.php";
}
  

  ?>

 



 
<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/clientes.js"></script>
<script src="vistas/assets/js/theme-change.js"></script>
<script src="vistas/assets/js/owl.carousel.js"></script>
<!-- stats number counter-->
<script src="vistas/assets/js/jquery.waypoints.min.js"></script>
<script src="vistas/assets/js/jquery.countup.js"></script>

</body>

</html>
<script>
  
  $('.counter').countUp();
</script>
<!-- //stats number counter -->


<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          responsiveClass: true,
          responsive: {
              0: {
                  items: 1,
                  nav: false
              },
              768: {
                  items: 2,
                  nav: false
              },
              1000: {
                  items: 3,
                  nav: false,
                  loop: false
              }
          }
      })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->