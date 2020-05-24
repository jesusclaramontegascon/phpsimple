<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
if (isset($_POST["nombre"])){//vienes del formulario
	//enviar por correo los datos del formulario
	$para="deliacampo@gmail.com";
	$asunto="De la web";
	$mensaje="Nombre: ".$_POST["nombre"];
	
	if (@mail($para, $asunto, $mensaje)){ //la arroba sirve para evitar que salga la información del error del intérprete de PHP.
		//mostrar un mensaje si se envían
		echo "Los datos que ha enviado son:<br />Nombre: ".$_POST["nombre"];
	}
	else{
	//mostrar un mensaje de error
	echo "Lo sentimos ha habido un error. Trate <a href=\"mailto:deliacampo@gmail.com\">deliacampo@gmail.com</a>";
	}
}
else{ //no vienes del formulario
?>
<form id="form1" method="post" action="#">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" id="nombre" />
  <input type="submit" name="enviar" id="enviar" value="Enviar" />
</form>
<?php
}
?>
</body>
</html>
