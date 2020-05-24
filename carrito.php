
<?php
session_start();
$_SESSION["carrito"]=0;

for ($desde=1;$desde<=100;$desde++):
/*$_SESSION["variable"][$_SESSION["carrito"]]=$desde;*/
$_SESSION["variable"]=$desde;

$_SESSION["carrito"]++;
endfor;


?>


			