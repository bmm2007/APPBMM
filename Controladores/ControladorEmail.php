<?php
namespace Controladores;
use Conect\Conexion;
use Controladores\ControladorInscripciones;
require_once('vistas/print/vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//clases de acceso a datos
// require_once "../../Controladores/cantidad_en_letras.php";
class ControladorEnvioEmail{
public static function ctrEnvioEmail($id){
    $item = 'id';
    $valor = $id;
    $inscrito = ControladorInscripciones::ctrMostrarInscritos($item, $valor);
    ob_start();

    // $doc = $html2pdf->output('FACTURA.pdf', 'S');
$mail = new PHPMailer(true);

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->Debugoutput = 'html';   
    $mail->isMAIL();                     
                       // Send using SMTP
    $mail->Host       = '';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = '';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = '';                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('webmgvi@gmail.com', 'Inscripciones-ISTBMM');
    
    $mail->addAddress($inscrito['correo']);     // Add a recipient
    // $mail->addAddress('ventasisfact@gmail.com');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
   $mail->AddEmbeddedImage(dirname(__FILE__)."/vistas/img/logo/logo.png", "my-attach", dirname(__FILE__)."/vistas/img/logo/logo.png");

    Fuente: https://www.iteramos.com/pregunta/64731/como-incrustar-imagenes-en-el-correo-electronico-html    
require_once "vistas/print/templatemail.php";
    // Content
    $mail->isHTML(true);
    $mail->MsgHTML($message);                                  // Set email format to HTML
    $mail->Subject = 'BMM';
    $mail->Body    = $message;//'<h1>Gracias</h1><br> Se le adjunta su comprobante </body></html>';
    $mail->AltBody = $message;//'<img src="https://dge4uaysoh8oy.cloudfront.net/lp/11/images/Animated%20newsletter%20with%20GIF%20banners.gif" >
    //This is the body in plain text for non-HTML mail clients';
    
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 'ok';
    
} catch (Exception $e) {
    echo "Mensaje no enviado. Error: {$mail->ErrorInfo}";
    
}
}
}