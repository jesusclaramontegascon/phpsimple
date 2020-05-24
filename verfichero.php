
<?
$VECT[1]="Taquigrafía";
$VECT[2]="Estudios Finacieros";
$VECT[3]="Economía industrial";
$VECT[4]="Matemáticas Económicas";
$VECT[5]="Derecho Administrativo";

$sw=0;
echo "<CENTER><H1><U>Datos academicos del alumno</H1></U></CENTER>";
$longitud=strlen($aladmin2);
echo "<BR><BR><BR>";

if (!$apertura=@fopen("adm2.txt","r"))
{ echo "<CENTER><U>El fichero de alumnos de segundo de aministrativo no se ha bierto por circustancias externas</U></CENTER>";
exit();
}
  $lectura=fgets($apertura,512);
  while (!feof($apertura))
  { $lineas++;
   $apellidos=strtok($lectura,",");
   $name=strtok("\n");

      if (strncasecmp($aladmin2,$lectura,$longitud)==0)
      {$sw=1;
      break;}

    $lectura=fgets($apertura,512);
   }//while

if ($sw==0)
{echo "<CENTER>Los datos no coinciden con los que ese encuentran en nuestra base de datos</CENTER><BR>";}

fclose ($apertura);

  if (!$apertura2=@fopen("notasadm2.txt","r"))
  {
  echo "<CENTER><U>El fichero de notas de segundo de aministrativo  no se ha bierto por circustancias externas</U></CENTER>";
  exit();
  }

  $lectura2=fgets($apertura2,512);

  while (!feof($apertura2))
  { $lineasdos++;
    if ($lineas==$lineasdos)
     {  if ($sw==0)
        {break;}

     echo "<CENTER><TABLE BORDER=5 WIDTH=300 HEIGHT=20 BGCOLOR=GOLD></CENTER>";
      echo "<TR>";
       echo "<TD BGCOLOR=BLACK><CENTER><IMG SRC=libro2.gif></CENTER></TD>";
       echo "</TR>";
     echo "<TR><TD><CENTER><B>$name $apellidos</B><BR><BR></CENTER></TR></TD>";
     $trozear=strtok($lectura2,",");
     echo "<TR><TD><CENTER><B>$VECT[1]:$trozear</B></CENTER></TR></TD>";

       for ($c=2;$c<=5;$c++)
         {$trozear2=strtok(",");$NOTAS[$c]=$trozear2;
          echo "<TR><TD><CENTER><B>$VECT[$c]:$NOTAS[$c]</B></CENTER></TR></TD>";
          $acumulador=$acumulador+$NOTAS[$c];}

   $lectura2=fgets($apertura2,512);
   $sumar=$trozear+$acumulador;
   $media=$sumar/5;
   echo "<TR><TD><CENTER><B>Su media es:$media<BR></B></CENTER></TR></TD>";
   echo "</CENTER>";
   echo "</TABLE>";
  } //if
$lectura2=fgets($apertura2,512);
 }//while
 fclose($apertura2);
?>

