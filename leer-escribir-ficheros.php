<?php
$gestor=fopen ("http://www.tutiempo.net/Tiempo_24_Horas/Zaragoza_Aeropuerto/LEZG.html", "r");
$contenido="";
while (!feof($gestor)) {
  $contenido .= fread($gestor, 8192);
}
fclose($gestor);


$contenido=strstr($contenido, "td24T");
$contenido=substr($contenido, 7, 150);
$temperatura=explode("&", $contenido);

$gestor=fopen("temperaturas.txt", "w+");
fwrite($gestor, $temperatura[0]);
fclose($gestor);

?> 

