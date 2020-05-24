<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pillando datos de otras páginas web</title>
</head>

<body>
<?php
$gestor=fopen ("http://www.tutiempo.net/Tiempo_24_Horas/Zaragoza_Aeropuerto/LEZG.html", "r");
$contenido="";
while (!feof($gestor)) {
  $contenido .= fread($gestor, 8192);
}
fclose($gestor);


$contenido=strstr($contenido, "Km/h");
$contenido=substr($contenido, 13, 150);
$presion=explode(".", $contenido);
echo "Actualmente la presión en Zaragoza es de ".$presion[0].". ";

$gestor=fopen("presiones.txt", "w+");
fwrite($gestor, $presion[0]);
fclose($gestor);

?>
</body>
</html>