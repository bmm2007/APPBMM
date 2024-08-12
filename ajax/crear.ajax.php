<?php
require_once "../vendor/autoload.php";
use Controladores\ControladorCrear;

class AjaxCrear{

  
    public function ajaxCrear(){

        $datos = $_POST;
        $file = $_FILES;
        var_dump($file);
         $respuesta = ControladorCrear::ctrCrear($datos, $file);

        echo $respuesta;
    }
public function ajaxDatosParaEditar(){
    $tabla = $_POST['tablaRegistro'];
    $item = 'id';
    $valor = $_POST['idEditar'];
    $respuesta = ControladorCrear::ctrMostrar($tabla, $item, $valor);
    echo json_encode($respuesta);
}
public function ajaxEditar(){
    $datos =  $_POST;
    $file = $_FILES;
    // var_dump($file);
    $respuesta = ControladorCrear::ctrEditar($datos, $file);
    return $respuesta;
}
public function ajaxEliminar(){
    $tabla = $_POST['tabla'];
    $datos = $_POST['idEliminar'];
    $respuesta = ControladorCrear::ctrEliminar($tabla, $datos);
    echo $respuesta;
}
}
if(isset($_POST['tipoenvio'])){

    $actadd = new AjaxCrear();
    $actadd->ajaxCrear();
}
if(isset($_POST['traerRegistro'])){

    $acttraer = new AjaxCrear();
    $acttraer->ajaxDatosParaEditar();
}
if(isset($_POST['efotoActual'])){

    $actUpdate = new AjaxCrear();
    $actUpdate->ajaxEditar();
}
if(isset($_POST['idEliminar'])){

    $actUpdate = new AjaxCrear();
    $actUpdate->ajaxEliminar();
}
