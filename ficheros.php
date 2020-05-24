<HTML>

    <HEAD> <TITLE>Pagina con php del ejercicio numero 3</TITLE>
      <CENTER>Resultado del formulario</CENTER>
      <BODY BGCOLOR="BLACK" TEXT="RED">
      <CENTER>-----------------------</CENTER>
      <CENTER><HR></CENTER>
   </HEAD>

<?

 if($abrir = @fopen("ASI1D20042005.asc", "r"))
  { 
  echo "El fichero se ha abierto <BR><BR><BR> ";
    

while (!feof($abrir))
{
$leer=fgets($abrir,512);
$name=strtok($abrir,",");
$apellido=strtok("\n");
   if ($name==$nombre)
    {
     echo "El nombre de esa persona existe en nuestra base de datos"

         if ("$ape"==$apellido)
         {
         echo "El apellido de esa persona tambien existe por lo tanto correcto"
         echo "$nombre $ape";
          }//if
          else
          {echo "El nombre existe pero los apellidos no son los correctos";}
    }//if
    else
     {echo "el nombre de esa persona no existe en la base de datos";}


   
 }//while

  fclose ($abrir);
  } 
 else
 {
 echo "El fichero no se ha abierto";}

?>
</HTML>