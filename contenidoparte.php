<?php
if ($_SESSION["jefe"] || $_SESSION["logeado"] && $_SESSION["user"]="si")
{
    if ($pagina){include ($pagina);}else{ include ("login.php");}
}
else
{ 
    if (!$_SESSION["jefe"] || !$_SESSION["logeado"] && !$_SESSION["user"]="si")
	{include ("login.php"); }
}
?>