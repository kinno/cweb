<?php
$archivo = fopen("contador.txt","r");
$contador = fgets($archivo, 26);
$contador++;
echo $contador;
$archivo=  fopen("contador.txt","w");
fwrite($archivo, $contador);
header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=rola.mp3');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
?>
