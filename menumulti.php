
<?php get_header(); // header.php ?> 


		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Andia - a super cool design agency...</a>
				</div>
				
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
				
				
					<?php $vector_li_padre=menumovil();

					foreach ($vector_li_padre as $campoclave=>$vector_li):
					$padre=$vector_li[1];
					$nombre_padre=$vector_li[3];
					   
					 if ($padre==0):$nombre_padre=$vector_li[3];
					   echo "<li>";
					   echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">';echo $nombre_padre;echo '</a>';
					
					   $vector_hijos=menu_wordpress_hijos_primernivel($vector_li[2]);
					   /*print_r($vector_hijos);echo "<br/>";*/
					   $contador_hijos_primernivel=count($vector_hijos);
					   
						if ($contador_hijos_primernivel>0):
						echo '<ul class="dropdown-menu dropdown-menu-left" role="menu">';
					       foreach ($vector_hijos as $campo_vector_hijos=>$vectorprimernivel):
								$vector_hijos_segundonivel=menu_wordpress_hijos_primernivel($vectorprimernivel[2]);
								 $contador_hijos_segundonivel=count($vector_hijos_segundonivel);
						   echo "<li>";echo "<a href=".$vectorprimernivel[4].">";echo $vectorprimernivel[2]; echo " "; echo $contador_hijos_segundonivel;echo "</a>";echo "</li>";
 
						   endforeach;
						echo '</ul>';
						endif;
					 endif;
					endforeach;
					?>
					

					</ul>
				</div>
			</div>
		</nav>


<?php
echo "<br/>";echo "<br/>";echo "<br/>";
/*
 echo '<nav class="navbar" role="navigation">';
			 echo '<div class="container">';
				 echo '<div class="navbar-header">';
					 echo '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">';
						 echo '<span class="sr-only">Toggle navigation</span>';
						 echo '<span class="icon-bar"></span>';
						 echo '<span class="icon-bar"></span>';
						 echo '<span class="icon-bar"></span>';
					 echo '</button>';
					 echo '<a class="navbar-brand" href="index.html">Andia - a super cool design agency...</a>';
				 echo '</div>';
				
				 echo '<div class="collapse navbar-collapse" id="top-navbar-1">';
					 
					*/



/*
print_r($resultado);echo "<br/>";echo "<br/>";echo "<br/>";*/
/*
echo "-------------estos es un wp_nav_menu--------------------------------------------<br/>";
wp_nav_menu();
echo "----------------------------------------------------------------<br/>";*/

/*
menu_wordpress_bootstrapt(0);	*/
?>
</body>
</html>