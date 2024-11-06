<script src="../vistas/pack/bower_components/jquery/dist/jquery.min.js"></script>
<?php

require_once "../../vendor/autoload.php";

use Controladores\ControladorCrear;
// echo $_REQUEST['idn'];
$titulo = str_replace('-', ' ', $_REQUEST['titulo']);
$tabla = 'noticias';
$item = 'titulo';
$valor = $titulo;
$resultado = ControladorCrear::ctrMostrar($tabla, $item, $valor);

print_r($resultado['titulo']);
echo '</br>';
print_r($resultado['descripcion']);
echo '</br>';
print_r($resultado['texto']);
echo '<img src="../vistas/img/noticias/'.$resultado['foto'].'" alt="" width="450px">';

?>
<script src="../vistas/js/buscar.js"></script>
<button class="btnpush btn btn-primary">cambio</button>
<div class="conte-p"></div>