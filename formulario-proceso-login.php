<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
if (isset($_POST["user"])){//vienes del formulario
	if(($_POST["user"]=="maria" || $_POST["user"]=="juan") && $_POST["password"]=="cursoweb"){
		echo "Hola: ".$_POST["user"];
	}
	else{
		echo "No eres un ususario autorizado.";
	}
}
else{ //no vienes del formulario
?>
<form id="form1" method="post" action="#">
  <label for="user">User</label>
  <input type="text" name="user" id="user" />
  <label for="password">Password</label>
  <input type="text" name="password" id="password" />  
  <input type="submit" name="enviar" id="enviar" value="Enviar" />
</form>
<?php
}
?>
</body>
</html>
