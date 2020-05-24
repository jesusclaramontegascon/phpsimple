<?php
session_start();
foreach ($_SESSION as $clave=>$valor){ //$_SESSION["nombre"]="Ana" convertir en $nombre="Ana"
//simplificar variables de sesión
$$clave=$valor;
}
$nombre=$_SESSION["nombre"];
$apellidos=$_SESSION["apellidos"];


?>
