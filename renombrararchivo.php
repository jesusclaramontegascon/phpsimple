<?php
$mensaje="";
if (isset($_POST["antiguoNombre"])){
	$antiguoNombre=$_POST["nuevoNombre"];
	$archivoAntiguo=explode (".", $_POST["antiguoNombre"]);
	$archivoNuevo=explode (".", $_POST["nuevoNombre"]);
	if ($archivoAntiguo[1]==$archivoNuevo[1]){
		if(rename($_POST["ruta"].$_POST["antiguoNombre"], $_POST["ruta"].$_POST["nuevoNombre"])){
			$mensaje="El fichero se ha renombrado correctamente";
		}
	}
	else{
		$mensaje="La extensión del fichero es distinta. No se pudo renombrar";
	}
}else{
$antiguoNombre=$_GET["archivo"];

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form1" method="post" action="renombrar.php">
  <input name="nuevoNombre" type="text" id="nuevoNombre" value="<?php echo $antiguoNombre; ?>" />
  <input name="antiguoNombre" type="hidden" id="antiguoNombre" value="<?php echo $antiguoNombre; ?>"/>
  <input name="ruta" type="hidden" id="ruta" value="<?php echo $_GET["ruta"]; ?>" />
  <input type="submit" name="renombrar" id="renombrar" value="Renombrar" />
</form>
<?php
echo $mensaje;
?>
</body>
</html>
