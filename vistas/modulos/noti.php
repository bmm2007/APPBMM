<link rel="stylesheet" href="../vistas/css/plantilla.css">
<script src="../vistas/pack/bower_components/jquery/dist/jquery.min.js"></script>
<?php

require_once "../../vendor/autoload.php";

use Controladores\ControladorCrear;
// echo $_REQUEST['idn'];
$titulo = str_replace('-', ' ', $_REQUEST['titulo']);
$tabla = 'noticias';
$item = 'titulo';
$valor = $titulo;
$resultado = ControladorCrear::ctrMostrar($tabla, $item, $valor);$tabla = 'noticias';
$item = null;
$valor = null;
$resultadon = ControladorCrear::ctrMostrarUltimas($tabla, $item, $valor);

?>
<section class="contenedor-principal-ne">
<div class="contenedor-noticia-c">
<?php
    echo '<h3>'.$resultado['titulo'].'</h3>';
    echo '</br>';
    echo '<img src="../vistas/img/noticias/'.$resultado['foto'].'" alt="" width="550px">';
    echo '<h3>'.$resultado['descripcion'].'</h3>';
echo '</br>';
print_r($resultado['texto']);

?>
</div>
<div class="contenedor-mas-vistas">
    <h3>ÚLTIMAS NOTICIAS</h3>
    <?php
    foreach($resultadon as $k => $result):
        if($result['id'] != $resultado['id']){
        
echo '<div>';
    
echo '<img src="../vistas/img/noticias/'.$result['foto'].'" alt=""';

echo '</div>';
            };
endforeach
?>
</div>
</section>

<script src="../vistas/js/buscar.js"></script>
<!-- <button class="btnpush btn btn-primary">cambio</button> -->
<!-- <div class="conte-p"></div> -->