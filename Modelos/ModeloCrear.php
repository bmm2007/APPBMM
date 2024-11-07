<?php
namespace Modelos;
// require_once "conexion.php";
use Conect\Conexion;
use PDO;

class ModeloCrear{

 public static function mdlMostrar($tabla, $item, $valor) {
        
    if($item != null){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  WHERE $item = :$item ORDER BY id DESC");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetch();

    }else{
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        //$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);    
        $stmt->execute();
        return $stmt->fetchall();

    }
   

    $stmt->close();
    $stmt = null;
 }
 
 public static function mdlMostrarUltimas($tabla, $item, $valor) {
        
    if($item != null){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  WHERE $item = :$item ORDER BY id DESC");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetch();

    }else{
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC LIMIT 4");
        //$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);    
        $stmt->execute();
        return $stmt->fetchall();

    }
   

    $stmt->close();
    $stmt = null;
 }
 
// REGISTRO DE PRODUCTOS
public static function mdlCrear($tabla, $datosCrear){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(titulo, descripcion, texto, fecha, foto) VALUES (:titulo, :descripcion, :texto, :fecha, :foto)");

    $stmt->bindParam(":titulo", $datosCrear['titulo'], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datosCrear['descripcion'], PDO::PARAM_STR);
    $stmt->bindParam(":texto", $datosCrear['texto'], PDO::PARAM_STR);
    $stmt->bindParam(":fecha", $datosCrear['fecha'], PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datosCrear['foto'], PDO::PARAM_STR);

   if($stmt->execute()){
         return   'ok';
    } else {
        return  'error';
    } 

    $stmt->close();
    $stmt = null;

}
// EDITAR PRODUCTO
public static function mdlEditar($tabla, $datosEditar){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set titulo = :titulo, descripcion = :descripcion, texto = :texto, foto = :foto WHERE id = :id");

    $stmt->bindParam(":id", $datosEditar['id'], PDO::PARAM_INT);
    $stmt->bindParam(":titulo", $datosEditar['titulo'], PDO::PARAM_STR);
    $stmt->bindParam(":descripcion", $datosEditar['descripcion'], PDO::PARAM_STR);
    $stmt->bindParam(":texto", $datosEditar['texto'], PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datosEditar['foto'], PDO::PARAM_STR);

   if($stmt->execute()){
         return   'ok';
    } else {
        return  'error';
    } 

    $stmt->close();
    $stmt = null;

}
// EDITAR PRODUCTO
public static function mdlActivaDesactivaUnidadMedida($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set activo = :activo WHERE id = :id");

    $stmt->bindParam(":id", $datos['id'], PDO::PARAM_INT);
    $stmt->bindParam(":activo", $datos['modo'], PDO::PARAM_STR);


   if($stmt->execute()){
         return   'ok';
    } else {
        return  'error';
    } 

    $stmt->close();
    $stmt = null;

}
// EDITAR PRODUCTO
public static function mdlActualizarStock($tabla, $detalle, $valor){

    if($valor == null){
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla set stock = :stock WHERE id = :id");

foreach($detalle as $k => $v){
    $tabla = 'productos';
    $item = 'id';
    $valor = $v['id'];
    $productos = ModeloProductos::mdlMostrarProductosStock($tabla, $item, $valor);
    
    foreach ($productos as $i => $prod){
       
    $cantidad = $prod['stock'] - $v['cantidad'];
   
    $stmt->bindParam(":id", $v['id'], PDO::PARAM_INT);
    $stmt->bindParam(":stock", $cantidad, PDO::PARAM_STR);


   $stmt->execute();
 }
}
    }else{

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla set stock = :stock WHERE id = :id");

    foreach($detalle as $k => $v){
    $tabla = 'productos';
    $item = 'id';
    $valor = $v['id'];
    $productos = ModeloProductos::mdlMostrarProductosStock($tabla, $item, $valor);
    
    foreach ($productos as $i => $prod){
       
    $cantidad = $prod['stock'] + $v['cantidad'];
   
    $stmt->bindParam(":id", $v['id'], PDO::PARAM_INT);
    $stmt->bindParam(":stock", $cantidad, PDO::PARAM_STR);


   $stmt->execute();
 }
} 
    }
}


// ELIMINAR PRODUCTO
public static function mdlEliminar($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla  WHERE id=:id");
    $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

    if($stmt->execute()){
        return 'ok';
    }else{
        return 'error';
    }
    $stmt->close();
    $stmt = null;
}



 // LISTAR PRODUCTOS OTRO MÉTODO
 public static function mdlListarProductos(){

    $content =  "<tbody class='body-productos'></tbody>";
    return $content;

}
 // LISTAR PRODUCTOS PARA LAS VENTAS
 public static function mdlListarProductosVentas(){

    $content =  "<tbody class='body-productos-ventas'></tbody>";
    return $content;

}
 // LISTAR PRODUCTOS PARA LAS VENTAS
 public static function mdlListarProductosGuia(){

    $content =  "<tbody class='body-productos-guia'></tbody>";
    return $content;

}
}