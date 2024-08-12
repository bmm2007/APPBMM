<?php

namespace Modelos;
// require_once "conexion.php";
use Conect\Conexion;
use PDO;

class ModeloInscripciones
{

    // MOSTRAR Inscripciones
    public static function mdlMostrarInscritos($tabla, $item, $valor)
    {

        if ($item != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla  WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            //$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);    
            $stmt->execute();
            return $stmt->fetchall();
        }


        $stmt->close();
        $stmt = null;
    }
    // OBJETO MODELO CREAR CLIENTE
    public static function mdlNuevaInscripcion($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(dni, nombres, apellido_paterno, apellido_materno, fecha_nacimiento, edad, correo, telefono, direccion, carrera, turno) VALUES (:dni, :nombres,  :apellido_paterno, :apellido_materno, :fecha_nacimiento, :edad, :correo, :telefono, :direccion, :carrera, :turno)");

        $stmt->bindParam(":dni", $datos['dni'], PDO::PARAM_STR);
        $stmt->bindParam(":nombres", $datos['nombres'], PDO::PARAM_STR);
        $stmt->bindParam(":apellido_paterno", $datos['apellido_paterno'], PDO::PARAM_STR);
        $stmt->bindParam(":apellido_materno", $datos['apellido_materno'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_nacimiento", $datos['fecha_nacimiento'], PDO::PARAM_STR);
        $stmt->bindParam(":edad", $datos['edad'], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos['correo'], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(":carrera", $datos['carrera'], PDO::PARAM_STR);
        $stmt->bindParam(":turno", $datos['turno'], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }
        $stmt->close();
        $stmt = null;
    }
    // EDITAR CLIENTE
    public static function mdlEditarCliente($tabla, $datos)
    {

        $stmt = Conexion::conectar();
        $stmt = $stmt->prepare("UPDATE $tabla SET nombre = :nombre, documento = :documento, ruc = :ruc, razon_social = :razon_social, email = :email, telefono = :telefono, direccion = :direccion, fecha_nacimiento = :fecha_nacimiento WHERE id = :id");

        $stmt->bindParam(":id", $datos['id'], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":documento", $datos['documento'], PDO::PARAM_STR);
        $stmt->bindParam(":ruc", $datos['ruc'], PDO::PARAM_STR);
        $stmt->bindParam(":razon_social", $datos['razon_social'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_nacimiento", $datos['fecha_nacimiento'], PDO::PARAM_STR);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt = null;
    }

    // ELIMINAR CLIENTE
    public static function mdlEliminarCliente($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla  WHERE id=:id");
        $stmt->bindParam(":id", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }
    // LISTAR Inscripciones OTRO MÉTODO
    public static function mdlListarInscripciones()
    {

        $content =  "<tbody class='body-clientes'></tbody>";
        return $content;
    }



    //BUSCAR RUC SUNAT
    public static function mdlBuscarDNI($numDoc)
    {


        $numDoc = $numDoc;

        $token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';

        // // Iniciar llamada a API
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.apis.net.pe/v1/dni?numero=' . $numDoc,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 2,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Referer: https://apis.net.pe/consulta-dni-api',
                'Authorization: Bearer ' . $token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // Datos listos para usar

        $empresa = json_decode($response);
        //var_dump($empresa);
        if (isset($empresa->numeroDocumento)) {
            $nombres = $empresa->nombres;
            $apellidos = $empresa->apellidoPaterno . ' ' . $empresa->apellidoMaterno;
            $datos = array(
                'dni' => $empresa->numeroDocumento,
                'cliente' => $nombres . ' ' . $apellidos,
                'nombre' => $empresa->nombres,
                'appaterno' => $empresa->apellidoPaterno,
                'apmaterno' => $empresa->apellidoMaterno

            );
            echo json_encode($datos, JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode('error', JSON_UNESCAPED_UNICODE);
        }
    }

    // OBTENER EL ULTIMO ID
    public static function mdlObtenerUltimoId()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM inscritos ORDER BY id DESC LIMIT 1");

        $stmt->execute();

        return $stmt->fetch();
    }
}
