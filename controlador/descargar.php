<?php
$archivo = fopen("contador.txt","r");
$contador = fgets($archivo, 26);
$contador++;
echo $contador;
$archivo=  fopen("contador.txt","w");
fwrite($archivo, $contador);
fclose($archivo);
$enlace = basename("nunca_en_tu_lugar.mp3");
 header('Content-Type: application/force-download');
   header('Content-Disposition: attachment; filename='.$enlace);
   header('Content-Transfer-Encoding: binary');
   header('Content-Length: '.filesize($enlace));

   readfile($enlace);
        
?>
