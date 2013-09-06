<?php

$archivo = fopen("contador.txt","r");
$contador = fgets($archivo, 26);
$contador++;
echo $contador;
$archivo=  fopen("contador.txt","w");
fwrite($archivo, $contador);
fclose($archivo);

$enlace = basename("nunca_en_tu_lugar.mp3");
  header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($enlace));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($enlace));
    ob_clean();
    flush();
    readfile($enlace);

require("class.phpmailer.php");
require("class.smtp.php");

$mail = new PHPMailer();

$body = "Cancion descargada!!!";

$mail->IsSMTP(); 

// la dirección del servidor, p. ej.: smtp.servidor.com
$mail->Host = "mail.carbonorock.com";

// dirección remitente, p. ej.: no-responder@miempresa.com
$mail->From = "kinno@carbonorock.com";

// nombre remitente, p. ej.: "Servicio de envío automático"
$mail->FromName = "Kinno";

// asunto y cuerpo alternativo del mensaje
$mail->Subject = "NOTIFICACION";
$mail->AltBody = "Cuerpo alternativo 
    para cuando el visor no puede leer HTML en el cuerpo"; 

// si el cuerpo del mensaje es HTML
$mail->MsgHTML($body);

// podemos hacer varios AddAdress
$mail->AddAddress("regino.tabares@gmail.com", "Kinno Tabares");

// si el SMTP necesita autenticación
$mail->SMTPAuth = true;

// credenciales usuario
$mail->Username = "carbonor";
$mail->Password = "V0q7zs5Y4t"; 

if(!$mail->Send()) {
echo "Error enviando: " . $mail->ErrorInfo;
} else {
echo "¡¡Enviado!!";
}
        
?>
