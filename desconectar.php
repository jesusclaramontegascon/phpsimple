<?

	   $desconectar=$_GET["desconectar"];
       if ($desconectar=="si")
		{session_destroy();}
	
	 /*echo "sesion activar desconectar vale<br>"; echo $_SESSION["activardesconectar"];echo "----------<br>";*/
	  
     if ($_SESSION["activardesconectar"]=="si"){
    echo "<br>"; echo "<center>"; /*echo "sesion formulario en desconectar vale<br>"; echo $_SESSION["formulario"];echo "----------<br>";*/
    echo "<table width='300' bgcolor='#E8DFA3' class='borde'>";echo "<tr>";
    echo "<td><center><a href=index.php?desconectar=si>Desconectar</a></center></td>";echo "</tr>";
    echo "</table>";
	echo "</center>";}

?>