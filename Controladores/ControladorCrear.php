<?php
namespace Controladores;
use Modelos\ModeloCrear;
date_default_timezone_set('America/Lima');
class ControladorCrear{
    
    // MOSTRAR ProductoS
    public static function ctrMostrar($tabla, $item, $valor) {

        $respuesta = ModeloCrear::mdlMostrar($tabla, $item, $valor);
        return $respuesta;
    }
    
public static function ctrCrear($datos, $file){

    if(isset($datos['tipoenvio'])){
        if((isset($datos['titulo']) && strlen($datos['titulo']) > 10) &&
        (isset($datos['descripcion']) && strlen($datos['descripcion']) > 20 ) &&
        (isset($datos['editor1']) && strlen($datos['editor1']) > 50 ))
        {
     
        //  VALIDAR IMAGEN   
        if(isset($file["foto"]["tmp_name"])){
                   
            if(($file["foto"]["type"] == "image/jpeg") || 
                ($file["foto"]["type"] == "image/jpg") ||
                ($file["foto"]["type"] == "image/png")
                ){               

                //CARPETA DONDE SE GUARDARÁ LA IMAGEN
            if($datos['tipoenvio'] == "noticias"){
                
                 $directorio = "../vistas/img/".$datos['tipoenvio'];
            } 
            if($datos['tipoenvio'] == "eventos"){
                 $directorio = "../vistas/img/".$datos['tipoenvio'];
            }
            if(!file_exists($directorio)){
                    mkdir($directorio, 0755, true);
                    }
               $rand = rand(9,1000000);
               $nombre_img = $file['foto']['name'];
               $nombrec = substr($nombre_img, strrpos($nombre_img, '.')+1);
               $nomlogo = $rand.'.'.$nombrec;
               $nombre_imagen = $nomlogo;

                move_uploaded_file($file['foto']['tmp_name'],$directorio."/".$nombre_imagen);
            }
            
        }       

        //$ruta = "vistas/img/productos/default/anonymous.png";
    
            $tabla = $datos['tipoenvio'];
       
       
            $datosCrear = array("titulo" => $datos['titulo'],
                                "descripcion" => $datos['descripcion'],
                                "texto" => $datos['editor1'],
                                "fecha" => date("Y-m-d H:i:s P"),
                                "foto" => $nombre_imagen);

                        $respuesta = ModeloCrear::mdlCrear($tabla, $datosCrear);
                        
                        if($respuesta == 'ok'){
                          if($datos['tipoenvio'] == 'noticias'){
                         
                            echo "<script>
                             Noticias();
                            </script>";
                           }
                        if($datos['tipoenvio'] == 'eventos'){
                          echo "<script>
                             Eventos();
                            </script>";
                             
             
                           
                          }
                          echo "<script>
                          Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Se ha guardado corréctamente',
                            showConfirmButton: false,
                            timer: 3500
                          })
                          $('#formNEcrear').each(function(){
                            this.reset();					 
                        });
                        $('iframe').contents().find('body').html('');
                        $('.previsualizar-foto').attr('src', '').hide();
                          if(window.history.replaceState){
                            window.history.replaceState(null,null, window.location.href);
                            }

                                 </script>";


                        }else{
                            echo "<script>
                            Swal.fire({
                              position: 'top-end',
                              icon: 'error',
                              title: 'No se ha podifo registrar ya que hay algún error, corrija y vuelva a intentarlo',
                              showConfirmButton: false,
                              timer: 3500
                            })
                            
                                   </script>";
                        }
        }else{
            echo "<script>
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'LLene todos los campos',
              showConfirmButton: false,
              timer: 3500
            })
            
                   </script>";
        }           
}
}
// EDITAR PRODUCTO
public static function ctrEditar($datos, $file){

        if((isset($datos['etitulo']) && strlen($datos['etitulo']) > 10) &&
        (isset($datos['edescripcion']) && strlen($datos['edescripcion']) > 20 ) &&
        (isset($datos['textone']) && strlen($datos['textone']) > 50 ))
        {
     
        //  VALIDAR IMAGEN  
        $nombre_imagen = $datos['efotoActual'];
        if(isset($file["efoto"]["tmp_name"]) && !empty($_FILES["efoto"]["tmp_name"])){
                   
            if(($file["efoto"]["type"] == "image/jpeg") || 
                ($file["efoto"]["type"] == "image/jpg") ||
                ($file["efoto"]["type"] == "image/png")
                ){               

                //CARPETA DONDE SE GUARDARÁ LA IMAGEN
         
                 $directorio = "../vistas/img/".$datos['tabla'];
          
            if(!file_exists($directorio)){
                    mkdir($directorio, 0755, true);
                    }
               $rand = rand(9,1000000);
               $nombre_img = $file['efoto']['name'];
               $nombrec = substr($nombre_img, strrpos($nombre_img, '.')+1);
               $nomlogo = $rand.'.'.$nombrec;
               $nombre_imagen = $nomlogo;

                move_uploaded_file($file['efoto']['tmp_name'],$directorio."/".$nombre_imagen);
            }
            
        }    

        //$ruta = "vistas/img/productos/default/anonymous.png";
    
            $tabla = $datos['tabla'];
       
       
        $datosEditar = array("id" => $datos['id'],
                        "titulo" => $datos['etitulo'],
                        "descripcion" => $datos['edescripcion'],
                        "texto" => $datos['textone'],
                        // "fecha" => date("Y-m-d H:i:s P"),
                        "foto" => $nombre_imagen);

                        $respuesta = ModeloCrear::mdlEditar($tabla, $datosEditar);
                        
                        if($respuesta == 'ok'){
                          if($datos['tabla'] == 'noticias'){
                         
                            echo "<script>
                            Noticias();
                            </script>";
                           }
                        if($datos['tabla'] == 'eventos'){
                          echo "<script>
                             Eventos();
                            </script>";
                             
             
                           
                          }
                          echo "<script>
                          Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Se ha actualizado  corréctamente',
                            showConfirmButton: false,
                            timer: 3500
                          })
                          $('#formNEeditar').each(function(){
                            this.reset();					 
                        });
                        $('iframe').contents().find('body').html('');
                        $('.previsualizar-foto').attr('src', '').hide();
                          if(window.history.replaceState){
                            window.history.replaceState(null,null, window.location.href);
                            }

                          
                                 </script>";
                                 
                        }else{
                            echo "<script>
                            Swal.fire({
                              position: 'top-end',
                              icon: 'error',
                              title: 'No se ha podifo registrar ya que hay algún error, corrija y vuelva a intentarlo',
                              showConfirmButton: false,
                              timer: 3500
                            })
                            
                                   </script>";
                        }
        }else{
            echo "<script>
            Swal.fire({
              position: 'top-end',
              icon: 'error',
              title: 'LLene todos los campos',
              showConfirmButton: false,
              timer: 3500
            })
            
                   </script>";
        }           

}

// ELIMINAR PRODUCTO 
public static function ctrEliminar($tabla, $datos){   
       
        $respuesta = ModeloCrear::mdlEliminar($tabla, $datos);
        return $respuesta;
}


}