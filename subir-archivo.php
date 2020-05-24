<?php
if (isset($_POST["ruta"])){
	if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $_POST["ruta"].$_FILES["archivo"]["name"])){
		$archivo=$_FILES["archivo"]["name"];
		header("location:listar-contenido-carpeta.php?upload=$archivo");
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" id="form1">
  <p>Subir archivo
    <input type="file" name="archivo" id="archivo" />
</p>
  <p>
    <input name="ruta" type="hidden" id="ruta" value="<?php echo $_GET["ruta"]; ?>" />
</p>
  <p>
    <input type="submit" name="subir" id="subir" value="Subir" />
  </p>
</form>
</body>
</html>
