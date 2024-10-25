<?php
require_once "../../vendor/autoload.php";
use Controladores\ControladorCrear;
// echo $_REQUEST['idn'];
$titulo = str_replace('_', ' ', $_REQUEST['idev']);
$tabla = 'eventos';
$item = 'titulo';
$valor = $titulo;
$resultado = ControladorCrear::ctrMostrar($tabla, $item, $valor);

print_r($resultado['titulo']);
echo '</br>';
print_r($resultado['descripcion']);
echo '</br>';
print_r($resultado['texto']);
?>

<img src="../vistas/img/eventos/<?php echo $resultado['foto'] ?>" alt="" width="350">