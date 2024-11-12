<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../vistas/css/notiev.css">
<script src="../vistas/pack/bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body>
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

?>
<section class="contenedor-principal-ne">
<div class="contenedor-noticia-c">
<?php
    echo '<h3>'.$resultado['titulo'].'</h3>';
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
        
echo '<div>';
    
echo '<img src="../vistas/img/eventos/'.$result['foto'].'" alt=""';

echo '</div>';
            };
endforeach
?>
</div>
</section>

<script src="../vistas/js/buscar.js"></script>
</body>
</html>