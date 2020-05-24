<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
//Divisores
$n=10;
echo "<h1>Los divisores de $n son: ";
for ($i=1; $i<=$n; $i++){
	if ($n%$i==0){
		echo "$i, ";
	}

}
echo "</h1>";

//Potencias
$m=3; //potencia
$n=10; //numero
$resultado=1;
for ($i=0; $i<$m; $i++){
	$resultado*=$n;
}
echo "<h1>$n<sup>$m</sup> = $resultado</h1>";

//Primos
$n=20;
for ($i=2; $i<$n; $i++){
	if ($n%$i==0){
		echo "$n no es un número primo";
		break;
	}
}

//Tabla de multiplicar
$n=5;
echo "<h1>La tabla del $n</h1>";
for ($i=0; $i<11; $i++){
	$resultado=$n*$i;
	echo "$n x $i = $resultado<br />";
}

//Suma de todos los números pares
echo "<h1>La suma de los números pares que hay entre 1 y 10 es ";
$resultado=0;
for ($i=1; $i<11; $i++){
	if ($i%2==0){
		$resultado+=$i;
	}
}
echo $resultado;


?>

</body>
</html>
