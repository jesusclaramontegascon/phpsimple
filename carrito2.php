
<?php
session_start();
include_once("includes/conectar.inc.php"); 
include_once("includes/conexiones.php"); 

?>
<?php  
$consultaposicionamiento_subcategorias="SELECT * FROM articulos where idarticulo=10";$ejecutarconsultaposicionamiento_subcategorias=mysql_query($consultaposicionamiento_subcategorias);
$filaposicionamiento_subcategorias=mysql_fetch_array($ejecutarconsultaposicionamiento_subcategorias);
$titulo_url_subcategorias=utf8_encode($filaposicionamiento_subcategorias["titulourl"]);
$keyword_subcategorias=utf8_encode($filaposicionamiento_subcategorias["keyword"]);
$descripcion_subcategorias=utf8_encode($filaposicionamiento_subcategorias["descripcionweb"]);
?>

  <?php 
			   
			   
			   $objeto=new frontend();
			  
  			  if (!$_POST["referencia"]){$objeto->redirection("index.php");}
			  else
			  {  if ($_POST["referencia"]):
			      $_SESSION["carrito"]++;
				   $_SESSION["nombreproducto"][$_SESSION["carrito"]]=$_POST["nombreproducto"];
				   $_SESSION["preciounitario"][$_SESSION["carrito"]]=$_POST["preciounitario"];
				   $_SESSION["subtotal"][$_SESSION["carrito"]]=$_POST["subtotal"];
				   $_SESSION["referencia"][$_SESSION["carrito"]]=$_POST["referencia"];
				   $_SESSION["cantidad"][$_SESSION["carrito"]]=$_POST["cantidad"];
				   $_SESSION["color"][$_SESSION["carrito"]]=$_POST["referenciacolor"];
				   $totalprecio=$_POST["subtotal"]*$_POST["cantidad"];
				   $_SESSION["totalprecio"][$_SESSION["carrito"]]=$totalprecio;
				   $_SESSION["totalprecio"][$_SESSION["carrito"]];
				   echo $_SESSION["nombreproducto"][$_SESSION["carrito"]];echo "<br/>";
				   echo $_SESSION["color"][$_SESSION["carrito"]];echo "<br/>";
				   print_r($_POST);
				   die();
				  /*
				  print_r($_POST);
			echo "--------------------------------------------------";
			 echo $_SESSION["nombreproducto"][$_SESSION["carrito"]];echo "<br/>";
			 echo $_SESSION["preciounitario"][$_SESSION["carrito"]];echo "<br/>";
			 echo $_SESSION["subtotal"][$_SESSION["carrito"]];echo "<br/>";
			 echo $_SESSION["referencia"][$_SESSION["carrito"]];echo "<br/>";
			 echo $_SESSION["cantidad"][$_SESSION["carrito"]];echo "<br/>";
			 echo $_SESSION["totalprecio"][$_SESSION["carrito"]];echo "<br/>";
			 echo $_SESSION["totalprecio"][$_SESSION["carrito"]];echo "<br/>";
			 echo "-----------------------------------------------<br/>";*/
			 
 				  $nombresdelasesion=array("nombreproducto","preciounitario","subtotal","referencia","cantidad","totalprecio");
				  $valorvariablesesion=array($_POST["nombreproducto"],$_POST["preciounitario"],$_POST["subtotal"],$_POST["referencia"],$_POST["cantidad"],$totalprecio); 
				  $direccion_anterior=$_SERVER['HTTP_REFERER'];
				  
				  $objeto->redirection($direccion_anterior);

				  endif;
			 
			  }
			         			   
		      ?>
                 <?php include_once("includes/google.php")?>