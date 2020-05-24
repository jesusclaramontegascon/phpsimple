<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
if(!isset($_POST["conociste"])){
?>
<form id="form1" name="form1" method="post" action="">
  <p>¿Cómo nos conociste?</p>

    <input name="conociste[]" type="checkbox" id="conociste_1" value="tv" />
  <label for="conociste[]">TV</label>
  <input name="conociste[]" type="checkbox" id="conociste_2" value="radio" />
  <label for="conociste[]">Radio</label>
  <input name="conociste[]" type="checkbox" id="conociste_3" value="prensa" />
  <label for="conociste[]">Prensa</label>
  <input name="conociste[]" type="checkbox" id="conociste_4" value="internet" />
  <label for="conociste[]">Internet</label>
  <input name="conociste[]" type="checkbox" id="conociste_5" value="amigos" />
  <label for="conociste[]">Amigos</label>
  <input name="conociste[]" type="checkbox" id="conociste_6" value="otros" />
  <label for="conociste[]">Otros<br />
  </label>
 
    <label for="enviar"></label>
    <p>
      <input type="submit" name="enviar" id="enviar" value="Enviar" />
  </p>
  </p>
</form>
<?php
}else{
	foreach ($_POST["conociste"] as $valor){
		echo "$valor<br/>";
}
}
?>
</body>
</html>
