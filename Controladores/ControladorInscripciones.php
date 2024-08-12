<?php
namespace Controladores;
use Modelos\ModeloInscripciones;
use Controladores\ControladorEnvioEmail;
class ControladorInscripciones{

    // MOSTRAR CLIENTES
    public static  function ctrMostrarInscritos($item, $valor){
        
        $tabla = "inscritos";
        $respuesta = ModeloInscripciones::mdlMostrarInscritos($tabla, $item, $valor);
        return $respuesta;
    }
    

    // CREAR CLIENTE
    public static function ctrNuevaInscripcion($datos){
        if(isset($datos['dni']) && isset($datos['nombres']) && isset($datos['apellido_paterno']) && isset($datos['apellido_materno']) && isset($datos['fecha_nacimiento']) && isset($datos['edad']) && isset($datos['correo']) && isset($datos['telefono']) && isset($datos['direccion']) && isset($datos['carrera'])  && isset($datos['turno'])){
       
            if($datos['dni'] !='' && $datos['nombres'] !='' && $datos['apellido_paterno'] !='' && $datos['apellido_materno'] !='' && $datos['fecha_nacimiento'] !='' && $datos['edad'] !='' && $datos['correo'] !='' && $datos['telefono'] !='' && $datos['direccion'] !='' && $datos['carrera'] !='' && $datos['turno'] !=''){
            
            $tabla = "inscritos";
            $respuesta = ModeloInscripciones::mdlNuevaInscripcion($tabla, $datos);
            $id = ModeloInscripciones::mdlObtenerUltimoId();
            
            if ($respuesta == 'ok'){
              
                echo "<script>
                $('#idCo').val({$id['id']});
                Swal.fire({
                    title: 'Estimado(a) {$datos['nombres']}, gracia pos su inscripción a la carrera de {$datos['carrera']}',
                    text: '¡Gracias!',
                    html: `
                    <div class='correo-success' style='font-size:1.5em;'>
                            Se te envió un correo a {$datos['correo']} con tus datos de inscripción y un adjunto con toda la información de la carrera en  formato pdf
                    </div>
                    <div class='correo-enviar'></div>
                    `,
                    icon: 'success',
                    showCancelButton: true,
                    showConfirmButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cerrar',
                  })
                  enviarEmail();
                    $('#formInscripcion').each(function(){
                    	this.reset();					
                    });
                    $('#idCo').val('');

                    $('input, select, textarea').removeClass('success');
                    $('input, select, textarea').removeClass('error');
                   
                    </script>";
           
            }else{
                echo "<script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: '¡Todos los campos son obligatorios!',
                    showConfirmButton: false,
                    timer: 28500
                  })
                  </script>";
            }

        }else{
            echo "<script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: '¡Todos los campos son obligatorios!',
                    showConfirmButton: false,
                    timer: 28500
                  })
                  </script>";
            
        }
        }else{
            echo "<script>
                    Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: '¡Todos los campos son obligatorios!',
                    showConfirmButton: false,
                    timer: 28500
                  })
                  </script>";
        }
    }

    // EDITAR CLIENTE
    public function ctrEditarCliente(){

        if(isset($_POST['editarCliente'])){
        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCliente"]) &&
            preg_match('/^[0-9]+$/', $_POST["editarDni"]) &&
            preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["editarEmail"])){

                $tabla = "clientes";
                $datos = array("nombre" => $_POST['editarCliente'],
                                "documento" => $_POST['editarDni'],
                                "email" => $_POST['editarEmail'],
                                "telefono" => $_POST['editarTelefono'],
                                "direccion" => $_POST['editarDireccion'],
                                "ruc" => $_POST['editarRuc'],
                                "razon_social" => $_POST['editarRS'],
                                "fecha_nacimiento" => $_POST['editarFechaNacimiento'],
                                "id" => $_POST['id']);

                     $respuesta = ModeloInscripciones::mdlEditarCliente($tabla, $datos);

                     if($respuesta == 'ok'){

                        echo "<script>
                        Swal.fire({
                            title: '¡El cliente ha sido editado corréctamente!',
                            text: '...',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Cerrar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                            window.location = 'clientes';
                            }
                        })</script>"; 
                     }

                    }else{
                        echo "<script>
                    Swal.fire({
                        title: '¡El cliente no puede ir vacío o llevar caracteres especiales!',
                        text: '...',
                        icon: 'error',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Cerrar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                        window.location = 'clientes';
                        }
                    })</script>"; 
                    }
        }

    }

    // ELIMINAR CLIENTE
    public static function ctrEliminarCliente($datos){
        if(isset($datos)){
            $tabla = "clientes";
            $respuesta = ModeloInscripciones::mdlEliminarCliente($tabla, $datos);
            if($respuesta == 'ok'){
                echo "success";
            }else{
                echo "error";
            }
        }
    }
    
// BUSCAR RUC Y DNI SUNAT - RENIEC
    public static  function ctrBuscarDNI($numDoc){
        
        $respuesta = ModeloInscripciones::mdlBuscarDNI($numDoc);
        return $respuesta;
        
    }




}