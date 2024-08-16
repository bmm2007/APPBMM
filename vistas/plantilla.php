<?php
session_start();


?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="76x76" href="vistas/img/logo/logo.png">
  <?php
  $rutasall = 'IST BUENAVENURA MESTANZA';


  if (isset($_GET['ruta']) && $_GET['ruta'] == 'contacto') {
    $rutasall = 'ISTBM | Contáctenos';
  }
  if (isset($_GET['ruta']) && $_GET['ruta'] == 'carreras') {
    $rutasall = 'ISTBM | Carreras Profesionales';
  }
    if (isset($_GET['ruta']) && $_GET['ruta'] == 'computacion') {
    $rutasall = 'ISTBM | Computación e Informática';
  }
  if (isset($_GET['ruta']) && $_GET['ruta'] == 'empresas') {
    $rutasall = 'ISTBM | Administracion de Empresas';
  }
  if (isset($_GET['ruta']) && $_GET['ruta'] == 'bancaria') {
    $rutasall = 'ISTBM | Administracion Bancaria';
  }
  if (isset($_GET['ruta']) && $_GET['ruta'] == 'contabilidad') {
    $rutasall = 'ISTBM | Contabilidad';
  }
  if (isset($_GET['ruta']) && $_GET['ruta'] == 'negocios') {
    $rutasall = 'ISTBM | Administracion de Negocios Internacionales';
  }
  if (isset($_GET['ruta']) && $_GET['ruta'] == 'secretariado') {
    $rutasall = 'ISTBM | Secretariado Ejecutivo';
  }
  if (isset($_GET['ruta']) && $_GET['ruta'] == 'inscripcion') {
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
  <!-- <link rel="stylesheet" type="text/css" href="vistas/modulos/style.php"> -->
  <link rel="stylesheet" href="vistas/assets/css/style-starter.css">
  <link rel="stylesheet" href="vistas/pack/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link href="vistas/pack/bower_components/toggle/css/bootstrap-toggle.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="vistas/pack/bower_components/font-awesome/css/font-awesome.min.css"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/pack/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <!-- DATEPICKER -->
  <link rel="stylesheet" href="vistas/pack/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="vistas/pack/bower_components/Ionicons/css/ionicons.min.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/pack/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="vistas/pack/bower_components/fontawesome-free/css/all.css">


  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="vistas/pack/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->

  <link rel="stylesheet" href="vistas/css/plantilla.css">
  <link rel="stylesheet" href="vistas/css/form.css">
  <link rel="stylesheet" href="vistas/css/menu.css">
  <link rel="stylesheet" href="vistas/css/sistem.css">






  <!-- Template JavaScript -->
  <!-- <script src="vistas/assets/js/jquery-3.3.1.min.js"></script> -->
  <!-- jQuery 3 -->
  <script src="vistas/pack/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <!-- Bootstrap 3.3.7 -->
  <script src="vistas/pack/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- <script src="vistas/assets/js/bootstrap.min.js"></script> -->

  <script src="vistas/pack/bower_components/toggle/js/bootstrap-toggle.min.js"></script>
  <!-- DTEPICKER -->
  <!-- DataTables -->
  <script src="vistas/pack/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vistas/pack/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vistas/pack/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vistas/pack/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>
  <!-- DTEPICKER -->
  <!-- daterangepicker -->
  <script src="vistas/pack/bower_components/moment/min/moment.min.js"></script>
  <script src="vistas/pack/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- DTEPICKER -->
  <script src="vistas/pack/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="vistas/pack/bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>

  <script src="vistas/pack/mask/jquery.mask.js"></script>
  <!-- sweet alert -->
  <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
  <script src="vistas/pack/plugins/sweetalert/sweetalert2.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- CK Editor -->
  <script src="vistas/pack/bower_components/ckeditor/ckeditor.js"></script>
  <!-- Bootstrap WYSIHTML5
<script src="vistas/pack/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> -->
</head>

<body class="">
  <div class="reload-all"></div>

  <?php


  /*=============================================
    CABEZOTE
    =============================================*/
  // if(isset($_GET['ruta'])){
  //   $ruta = $_GET['ruta'];
  // }else{
  //   $ruta = '';
  // }
  if (isset($_GET['ruta']) && $_GET['ruta'] == "login") {

    include "modulos/login.php";
  } else {
    if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

      echo "<section class='contenedor-sistema'>";

      include "modulos/header_sistem.php";
      if ((isset($_GET['ruta']) && $_GET["ruta"] == "sistem") ||
        (isset($_GET['ruta']) && $_GET["ruta"] == "noticias-eventos") ||
        (isset($_GET['ruta']) && $_GET["ruta"] == "usuarios") ||
        (isset($_GET['ruta']) && $_GET["ruta"] == "admin_noticias") ||
        (isset($_GET['ruta']) && $_GET["ruta"] == "salir") ||
        (isset($_GET['ruta']) && $_GET["ruta"] == "inscritos")
      ) {

        include "modulos/" . $_GET["ruta"] . ".php";
      } else {

        include "modulos/404.php";
      }

      echo "</section>";
    } else {
      include "modulos/header.php";

      echo "<div id='contenedorTotal'";
      /*=============================================
    MENU
    =============================================*/

      // include "modulos/menu.php";

      /*=============================================
    CONTENIDO
    =============================================*/

      if (isset($_GET["ruta"])) {

        if (
          $_GET["ruta"] == "inicio" ||
          $_GET["ruta"] == "carreras" ||
          $_GET["ruta"] == "inscripcion" ||
          $_GET["ruta"] == "envia" ||
          $_GET["ruta"] == "computacion" ||
          $_GET["ruta"] == "empresas" ||
          $_GET["ruta"] == "bancaria" ||
          $_GET["ruta"] == "contabilidad" ||
          $_GET["ruta"] == "secretariado" ||
          $_GET["ruta"] == "negocios" ||
          $_GET["ruta"] == "contacto"
        ) {

          include "modulos/" . $_GET["ruta"] . ".php";
        } else {

          include "modulos/404.php";
        }
      } else {

        include "modulos/index.php";
      }




      // include "modulos/index.php";


      echo '</div>';
      /*=============================================
    FOOTER
    =============================================*/

      
      include "modulos/footer.php";
    }
  }
  ?>






  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/inscripciones.js"></script>
  <script src="vistas/assets/js/owl.carousel.js"></script>
  <script src="vistas/js/buscar.js"></script>
  <script src="vistas/js/notieve.js"></script>
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
  $(document).ready(function() {
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
  $(document).ready(function() {
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
  $(function() {
    $('.navbar-toggler').click(function() {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function() {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function() {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->
<script>
  $(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    // $('.textarea').wysihtml5()
    CKEDITOR.replace('editor1');
    // The "change" event is fired whenever a change is made in the editor.

  })
</script>
<script>
  $(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    // $('.textarea').wysihtml5()
    var editor = CKEDITOR.replace('editor2');
    // The "change" event is fired whenever a change is made in the editor.
    editor.on('change', function(evt) {
      // getData() returns CKEditor's HTML content.
      var datos = evt.editor.getData();
      $("#textone").html(datos);
    });
  })
</script>