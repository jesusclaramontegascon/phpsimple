
<table width="459" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="2" valign="bottom" bgcolor="#B37C29"></td>
  </tr>
  <tr>
    <td height="30" valign="bottom" bgcolor="#c39a1a"><img src="imagesseccion/souvenirsini.jpg" width="459" height="30" /></td>
  </tr>
  <tr>
    <td height="399" valign="top" bgcolor="#c39a1a">


        <?php 
/*		session_destroy();*/
include ("includes/clasecarro.php");
$destruir=$_GET["destruir"];


if ($destruir=="si"){
session_destroy();echo "<center>";echo "<br><img src=images/carroperras.jpg class=bordefoto1><br>";
echo "<span class='letrainternagrande'>El carrito ha sido destruido</Span>";
 echo "<center><a href=index.php?pagina=souvenirs.php class='enlace2'>Volver</a></center>";
echo "</center>";

}
else
{		 	

    if ($_SESSION["carrito"]==0)
	{  echo "<center>";
	  echo "<br/><img src=images/carri.jpg class=bordefoto1><br>";
	 echo "<br/><span class=letrainternagrande>El carrito de la compra se encuentra vacio</span>";
	 echo "<center><a href=index.php?pagina=souvenirs.php class='enlace2'>Volver</a></center>";
	 echo "</center>";
	 }
	 else
	 {   echo "<br/><center><img src='images/carroperras.jpg'  height=200 class='bordefoto1'></center>";
	   echo "<br/>";	   	   echo "</br>";
	  echo "<div id='scroll'>";
	  echo "<table width=430 cellpading=1 cellspacing=1 class='bordetabla' align='center'>";
        echo "<tr>";
		echo "<td class='letrainteranoro'  align='center'>Eliminar</td>";
        echo "<td class='letrainteranoro'  align='center'>Producto</td>";
       echo "<td class='letrainteranoro'  align='center'>Precio</td>";
        echo "</tr>";
		for($desde=1;$desde<=$_SESSION["carrito"];$desde++)
		{ if ($desde%2==0){$color='#E5BF4F';}else{$color='#D7B85D';}
                  if ($_SESSION["componente"][$desde]!=0 || $_SESSION["precio"][$desde]!=0)
				  {
                 echo "<tr bgcolor=".$color.">";
		 	     echo "<td align='center'>";echo "<a href=index.php?pagina=eliminarcarro.php&valor=".$desde." class='enlace2'>Eliminar</a></td>";
	             echo "<td align='center'>";echo "<span class=letrainterna>";echo $_SESSION["componente"][$desde];echo "</span></td>";
	         	 echo "<td align='center'> ";echo "<span class=letrainterna>";echo $_SESSION["precio"][$desde];echo "</span></td>";
	             echo "</tr>";}
		 }
		 
		echo "</table>";echo "</div>";
		echo "<br/>";
		echo "<center>";
		echo "<span class='letrainternagrande'>Vaciar Carrito?</span><br>";
		echo "<a href=index.php?pagina=vercarrito.php&destruir=si class='enlace2'>Si</A><br>";
		echo "<a href=index.php?pagina=vercarrito.php&destruir=no class='enlace2'>No</A><br>";
		echo "</center>";   
		 }

}
	?>
	  </p>
      <p>&nbsp;</p>

    </td>
  </tr>
</table>
