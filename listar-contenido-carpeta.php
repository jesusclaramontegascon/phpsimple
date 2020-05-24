<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Tamaño</th>
    <th scope="col">Modificado</th>
    <th scope="col">Acción</th>
  </tr>
<?php
if (isset($_GET["carpeta"])){
	$dir=$_GET["base"].$_GET["carpeta"]."/";
	}
else
	$dir = "./";

// Abrir un directorio conocido, y proceder a leer sus contenidos
if (is_dir($dir)) {
    if ($gd = opendir($dir)) {
        while (($archivo = readdir($gd)) !== false) { //mientras haya elementos que leer extrae ese elemento en la variable $archivo
			if (is_dir ($dir.$archivo)){ //  
				echo "<tr><td>";           
				echo "<a href=\"listar-contenido-carpeta.php?carpeta=$archivo&base=$dir\"><img src=\"folder.gif\">$archivo</td></a>\n";
				echo "<td>tamaño</td>";
				echo "<td>fecha</td>";
				echo "<td><a href=\"renombrar.php?ruta=$dir&archivo=$archivo\">Renombrar</a></td>";
				echo "</tr>";
				}
        }
		rewinddir($gd);
		 while (($archivo = readdir($gd)) !== false) {
		 	$tieneFicheros=false;
            if (!is_dir ($dir.$archivo)){ //../../
				$tieneFicheros=true;
			 //Aquí calcula los kb y los mb
			 $tamano=ceil(filesize($dir.$archivo)/1024);
			 $unidad="kb";
			 if ($tamano>1023){
			 	$tamano=ceil($tamano/1024);
				$unidad="mb";
			}
			$tamano=number_format($tamano, 0, ".", ","); 
				$activo="";
				if (isset($_GET["upload"])){
					if ($_GET["upload"]==$archivo)
						$activo="style=\"background-color: #FF0000\"";
				}
			 	echo "<tr $activo><td>";
				echo "$archivo</td> \n";
				echo "<td>$tamano $unidad</td>";
				
				
				//Fecha y formato de fecha
				$meses=array("", "enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");
				$months=array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
				$fecha=date ("j \d\e F \d\e Y, H:i", filemtime($dir.$archivo));
				$fecha=str_replace($months, $meses, $fecha);


				echo "<td>$fecha</td>";
				echo "<td><a href=\"renombrar.php?ruta=$dir&archivo=$archivo\">Renombrar</a></td>";
				echo "</tr>";
				}
		
        }
        closedir($gd);
		
    }
	if (!$tieneFicheros){
			echo "No contiene ficheros";
		}
}
?> 

</table>
<?php
	if (!$tieneFicheros){
			echo "No contiene ficheros";
		}
?>
<p><a href="subir-archivo.php?ruta=<?php echo $dir ;?>">Subir archivo</a></p>
</body>
</html>
