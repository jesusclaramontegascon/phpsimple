

<?php

$longitud=strlen($aladmin2);
$apellidos=strtok($aladmin2,",");
$nombre=strtok(" ");
$notas[$c];

$VECT[1]="Taquigrafía";
$VECT[2]="Estudios Finacieros";
$VECT[3]="Economía industrial";
$VECT[4]="Matemáticas Económicas";
$VECT[5]="Derecho Administrativo";

if (!$apertura=@fopen("adm2.txt","r"))
{
echo "<CENTER><H2>El fichero de los alumnos de 2º de administracion no se abierto correctamente</H2></CENTER>";
echo "<CENTER><IMG SRC=stop.gif>";
echo "<U><H3>Volver a segundo de administrativo<H3></U>";
echo "<A HREF=2admon.html><IMG SRC=atras.gif></A>";
echo "</CENTER>";
exit();
}


$leer=fgets($apertura,512);
$sw=0;
while (!feof($apertura))
{ $contador++;
  if (strncasecmp($aladmin2,$leer,$longitud)==0)
  { $sw=1;

   break;
   }


$leer=fgets($apertura,512);
}


if ($sw==0)
{
echo "<CENTER><H2><U>$nombre $apellidos ha sido borrado anteriormente</U><H2></CENTER>";
echo "<CENTER><IMG SRC=stop.gif>";
echo "<U><H3>Volver a segundo de administrativo<H3></U>";
echo "<A HREF=2admon.html><IMG SRC=atras.gif></A>";
echo "</CENTER>";
exit();
}


if (!$apertura2=@fopen("notasadm2.txt","r"))
{
echo "<CENTER><H2>El fichero de las notas de los alumnos de 2º de administracion no se abierto correctamente</H2></CENTER>";
echo "<CENTER><IMG SRC=stop.gif>";
echo "<U><H3>Volver a segundo de administrativo<H3></U>";
echo "<A HREF=2admon.html><IMG SRC=atras.gif></A>";
echo "</CENTER>";

exit();
}

$leer2=fgets($apertura2,512);
while (!feof($apertura2))
{$lineas++;
  if ($lineas==$contador){
  $noticas=$leer2;
  break;}
$leer2=fgets($apertura2,512);
}

fclose($apertura);
fclose($apertura2);

if (!$apertura3=@fopen("adm2.txt","r"))
{
echo "<CENTER><H2>El fichero de los alumnos de 2º de administracion no se abierto correctamente</H2></CENTER>";
echo "<CENTER><IMG SRC=stop.gif>";
echo "<U><H3>Volver a segundo de administrativo<H3></U>";
echo "<A HREF=2admon.html><IMG SRC=atras.gif></A>";
echo "</CENTER>";
exit();
}

if (!$apertura4=@fopen("adm2copia.txt","w"))
{
echo "<CENTER><H2>El fichero temporal de los alumnos de 2º de administracion no se abierto correctamente</H2></CENTER>";
echo "<CENTER><IMG SRC=stop.gif>";
echo "<U><H3>Volver a segundo de administrativo<H3></U>";
echo "<A HREF=2admon.html><IMG SRC=atras.gif></A>";
echo "</CENTER>";
exit();
}

$leer3=fgets($apertura3,512);
while (!feof($apertura3))
{
  $contador2++;
 if ($contador!=$contador2)
 {
 fwrite($apertura4,$leer3);
 }

$leer3=fgets($apertura3,512);
}
fclose($apertura3);
fclose($apertura4);


copy("adm2copia.txt","adm2.txt");

if (!$apertura5=@fopen("notasadm2.txt","r"))
{
echo "<CENTER><H2>El fichero de notas los alumnos de 2º de administracion no se abierto correctamente</H2></CENTER>";
echo "<CENTER><IMG SRC=stop.gif>";
echo "<U><H3>Volver a segundo de administrativo<H3></U>";
echo "<A HREF=2admon.html><IMG SRC=atras.gif></A>";
echo "</CENTER>";
exit();
}

if (!$apertura6=@fopen("notasadm2copia.txt","w"))
{
echo "<CENTER><H2>El fichero temporal de notas los alumnos de 2º de administracion no se abierto correctamente</H2></CENTER>";
echo "<CENTER><IMG SRC=stop.gif>";
echo "<U><H3>Volver a segundo de administrativo<H3></U>";
echo "<A HREF=2admon.html><IMG SRC=atras.gif></A>";
echo "</CENTER>";
exit();
}

$leer4=fgets($apertura5,512);
while(!feof($apertura5))
{$contarlineas++;
 if ($contarlineas!=$lineas){
 fwrite($apertura6,$leer4);}
 $leer4=fgets($apertura5,512);
}

fclose($apertura5);
fclose($apertura6);

copy("notasadm2copia.txt","notasadm2.txt");
echo "<CENTER><U><H2>Alumno y notas que acaban de ser dadas de baja</U></H2></CENTER>";
echo "<CENTER><TABLE BORDER=5 WIDTH=300 HEIGHT=20 BGCOLOR=GOLD></CENTER>";
echo "<TR>";
echo "<TD BGCOLOR=BLACK><CENTER><IMG SRC=libro2.gif></CENTER></TD>";
echo "</TR>";
echo "<TR><TD><CENTER><H3>$nombre,$apellidos</H3></CENTER></TR></TD>";
$primera=strtok($noticas,",");
echo "<TR><TD><H3>$VECT[1]:$primera</H3></TD></TD>";
   for ($c=2;$c<=5;$c++)
   {$notas[$c]=strtok(",");
   echo "<TR><TD><h3>$VECT[$c]:$notas[$c]</h3></TR></TD>";
   }
echo "</TABLE>";

?>

