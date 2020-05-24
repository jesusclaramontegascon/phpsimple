<?PHP

      // Obtener datos introducidos desde el formulario
      // >>>>>>>>>>> FUNCIONA CON register_globals off <<<<<<<<<<<
      //   $titulo = $_REQUEST['titulo'];
      //   $texto = $_REQUEST['texto'];
      //   $categoria = $_REQUEST['categoria'];
      //   $imagen = $_REQUEST['imagen'];

      // Comprobar que se han introducido todos los datos obligatorios
         $errores = "";
         if (trim($titulo) == "")
            $errores = $errores . "<LI>Se requiere el título de la noticia";
         if (trim($texto) == "")
            $errores = $errores . "<LI>Se requiere el texto de la noticia";

      // Subir fichero
         $copiarFichero = false;

      // Para PHP >= 4.1.0 poner $_FILES en lugar de $HTTP_POST_FILES

      // Copiar fichero en directorio de ficheros subidos
      // Se renombra para evitar que sobreescriba un fichero existente
      // Para garantizar la unicidad del nombre se añade una marca de tiempo
         if (is_uploaded_file ($HTTP_POST_FILES['imagen']['tmp_name']))
         {
            $nombreDirectorio = "img/";
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $HTTP_POST_FILES['imagen']['name'];
            $copiarFichero = true;
         }
      // No se ha introducido ningún fichero
         else if ($HTTP_POST_FILES['imagen']['name'] == "")
            $nombreFichero = '';
      // El fichero introducido no se ha podido subir
         else
         {
            $errores = $errores . "<LI>No se ha podido subir el fichero\n";
            $nombreFichero = '';
         }

     // Mostrar errores encontrados
         if ($errores != "")
         {
            print ("No se ha podido realizar la inserción debido a los siguientes errores:");
            print ("<UL>");
            print ($errores );
            print ("</UL>");
            print ("[ <A HREF='javascript:history.back()'>Volver</A> ]");
            exit();
         }

      // Aquí vendría la inserción de la noticia en la Base de Datos

      // Mover fichero de imagen a su ubicación definitiva
         if ($copiarFichero)
            move_uploaded_file ($HTTP_POST_FILES['imagen']['tmp_name'],
            $nombreDirectorio . $nombreFichero);

      // Mostrar datos introducidos
         print ("La noticia ha sido recibida correctamente:");
         print ("<UL>");
         print ("<LI>Título: $titulo\n");
         print ("<LI>Texto: $texto\n");
         print ("<LI>Categoría: $categoria\n");
         print ("<LI>Imagen: <A TARGET='_blank' HREF='" . $nombreDirectorio . $nombreFichero . "'>" . $nombreFichero . "</A>");
         print ("</UL>");

         print ("<BR>");
         print ("[ <A HREF='ejercicio4.php'>Insertar otra noticia</A> ]");

?>