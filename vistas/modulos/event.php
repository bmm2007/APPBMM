<?php

require_once "../../vendor/autoload.php";

use Controladores\ControladorCrear;
// echo $_REQUEST['idn'];
$titulo = str_replace('-', ' ', $_REQUEST['titulo']);
$tabla = 'eventos';
$item = 'titulo';
$valor = $titulo;
$resultado = ControladorCrear::ctrMostrar($tabla, $item, $valor);
$tabla = 'eventos';
$item = null;
$valor = null;
$resultadon = ControladorCrear::ctrMostrarUltimas($tabla, $item, $valor);
$date = date_create($resultado['fecha']);
?>
<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <meta property="og:url" content="https://istbm.edu.pe/event/<?php echo $resultado['titulo']?>" />
<meta property="og:type" content="noticia" />
<meta property="og:title" content="<?php echo $resultado['titulo'] ?>" />
<meta property="og:description" content="<?php echo $resultado['descripcion']?>" />
  <meta property="og:image" content="https://istbm.edu.pe/vistas/img/eventos/<?php echo $resultado['foto']?>"/> -->
  <title><?php echo $resultado['titulo'] ?></title>
  <link rel="stylesheet" href="../vistas/pack/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vistas/pack/bower_components/fontawesome-free/css/all.css">
<link rel="stylesheet" href="../vistas/css/notiev.css">
<script src="../vistas/pack/bower_components/jquery/dist/jquery.min.js"></script>
<!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v21.0&appId=255718034026933"></script> -->
</head>
<body>


<section class="contenedor-principal-ne">
<div class="contenedor-noticia-c">
<?php
    echo '<h3>'.$resultado['titulo'].'</h3>';
     echo '<div class="date-ne re-noev">' . date_format($date, "d/m/Y h:i:s A") . ' <i class="fas fa-calendar"></i></div>';
    echo '</br>';
    echo '<img src="../vistas/img/eventos/'.$resultado['foto'].'" alt="" width="550px">';
   
    echo '<h3 class="h3-descripcion">'.$resultado['descripcion'].'</h3>';
// echo '</br>';
echo $resultado['texto'];

?>
</div>
<div class="contenedor-mas-vistas">
    <h3>ÚLTIMAS NOTICIAS</h3>
    <?php
    foreach($resultadon as $k => $result):
        if($result['id'] != $resultado['id']){
          $date = date_create($result['fecha']);
          $titulo = str_replace(' ', '-', $result['titulo']);
echo '<div class="noticias-ultimas">';
    
echo '<img src="../vistas/img/eventos/'.$result['foto'].'" alt=""';

echo '<br/><div class="titulo-ne"><a href="'.mb_strtolower($titulo).'">'.$result['titulo'].'</a></div>
<div class="date-ne">' . date_format($date, "d/m/Y h:i:s A") . ' <i class="fas fa-calendar"></i></div>
</div>';
            };
endforeach
?>
</div>
</section>

<script src="../vistas/js/buscar.js"></script>
  <div class="home-p"><a href="../inicio"><i class="fas fa-home fa-lg"></i></a></div>  





<!-- Your share button code -->
<div id="fb-root"></div>
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
$rutas = isset($_GET['titulo']) ? $_GET['titulo'] : $_GET['titulo'] = '';
?>

<div class="fb-share-button share-ne" data-href="https://istbm.edu.pe/event/<?php echo $rutas; ?>" data-layout="button" data-size="large">
</div>

<a class="btn-wts what-btn" href="https://wa.me/51901733995/?text=Quiero%20Información" target="_blank"></a>




</body>
</html>
