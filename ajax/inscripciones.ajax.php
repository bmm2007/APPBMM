<?php
require_once "../vendor/autoload.php";
use Controladores\ControladorInscripciones;
class AjaxInscripciones{

    public function ajaxNuevoInscrito() {
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $fechaini = $_POST["fecha_nacimiento"];
        $fechaini2 = str_replace('/', '-', $fechaini);
        $fechaNacimiento = date('Y-m-d', strtotime($fechaini2));
        $datos = array(
            'dni' => test_input($_POST['dni']),
            'nombres' => test_input(mb_strtoupper($_POST['nombres'], 'utf-8')),
            'apellido_paterno' => test_input(mb_strtoupper($_POST['apellido_paterno'], 'utf-8')),
            'apellido_materno' => test_input(mb_strtoupper($_POST['apellido_materno'], 'utf-8')),
            'fecha_nacimiento' => $fechaNacimiento,
            'edad' => test_input($_POST['edad']),
            'correo' => test_input($_POST['correo']),
            'telefono' => test_input($_POST['telefono']),
            'direccion' => test_input($_POST['direccion']),
            'carrera' => test_input($_POST['carrera']),
            'turno' => test_input($_POST['turno'])
        );
        // var_dump($datos);
        $resultado = ControladorInscripciones::ctrNuevaInscripcion($datos);
        
    }
    public $fecha_nacimiento;
    public function ajaxEdad(){
        $fecha1 = $this->fecha_nacimiento;
        $fecha2 = str_replace('/', '-', $fecha1);
        $fecha = date('Y-m-d', strtotime($fecha2));
       
        $fecha_naci = new DateTime($fecha);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_naci);
        echo $edad->y;
    }

     // BUSCAR RUC O DNI
     public $dniCliente;
     public function ajaxBuscarDNI(){       
       
          $numDoc = $this->rucCliente;
         $resultado = ControladorInscripciones::ctrBuscarDNI($numDoc);
         
     }
         // VALIDAR NO REPETIR USUARIO
    public $validarDni;
    public function ajaxValidarDni(){

        $item = 'dni';
        $valor= $this->validarDni;
        $respuesta = ControladorInscripciones::ctrMostrarInscritos($item, $valor);

        echo json_encode($respuesta);
    }
}
if(isset($_POST['dni'])){
    $nuevo = new AjaxInscripciones();
    $nuevo->ajaxNuevoInscrito();
}
if(isset($_POST['calcula_edad'])){
    $objfecha = new AjaxInscripciones();
    $objfecha -> fecha_nacimiento = $_POST['fecha_nacimiento'];
    $objfecha->ajaxEdad();
}
// BUSCAR RUC CLIENTE
if(isset($_POST['dniCliente'])){
    $rucCliente = new AjaxInscripciones();
    $rucCliente-> rucCliente = trim($_POST['dniCliente']);
    $rucCliente->ajaxBuscarDNI();
}
if(isset($_POST['validarDni'])){
    $rucCliente = new AjaxInscripciones();
    $rucCliente-> validarDni = trim($_POST['validarDni']);
    $rucCliente->ajaxValidarDni();
}