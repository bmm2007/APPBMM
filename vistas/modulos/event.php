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
  <title><?php echo $resultado['titulo'] ?></title>
  <link rel="stylesheet" href="../vistas/pack/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vistas/pack/bower_components/fontawesome-free/css/all.css">
<link rel="stylesheet" href="../vistas/css/notiev.css">
<script src="../vistas/pack/bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body>


<section class="contenedor-principal-ne">
<div class="contenedor-noticia-c">
<?php
    echo '<h3>'.$resultado['titulo'].'</h3>';
     echo '<div class="date-ne re-noev">' . date_format($date, "d/m/Y h:i:s A") . ' <i class="fas fa-calendar"></i></div>';
    echo '</br>';
    echo '<img src="../vistas/img/eventos/'.$resultado['foto'].'" alt="" width="550px">';
   
    echo '<h3>'.$resultado['descripcion'].'</h3>';
// echo '</br>';
echo $resultado['texto'];

?>
</div>
<div class="contenedor-mas-vistas">
    <h3>ÚLTIMOS EVENTOS</h3>
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
    
</body>
</html>
<!-- <button class="btnpush btn btn-primary">cambio</button> -->
<!-- <div class="conte-p"></div> -->