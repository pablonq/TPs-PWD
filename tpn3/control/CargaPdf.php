<?php

class CargaPdf
{

  /**
   * Analiza si el archivo subido es de tipo texto (.pdf, .doc), retorna entero
   * @param string $nombreArchivo
   * @return int
   */
  function analizarArchivoPdf($nombreArchivo)
  {
    $subirOk = true;

    //Busco en el nombre si aparece pdf o doc
    $mystring = $nombreArchivo;
    $encontrar   = '.pdf';
    $encontrar2   = '.doc';
    $pos1 = strpos($mystring, $encontrar);
    $pos2 = strpos($mystring, $encontrar2);

    //Controlar formatos
    if ($pos1 === false && $pos2 === false) {
      $mensaje = 1;
      $subirOk = false;
    }

    //Chequear tamaño
    if ($_FILES['archivoSubido']["size"] > 2000000) {
      echo "El tamano supera el limite. max 2mb";
      $subirOk = false;
      $mensaje = 2;
    }

    if ($subirOk == false) {
      $mensaje = 0;
    } else {
      if (move_uploaded_file($_FILES['archivoSubido']['tmp_name'], '../../Archivos/' . $nombreArchivo)) {
        $mensaje = 3;
      } else {
        $mensaje = 0;
      }
    }
    return $mensaje;
  }

  /**
   * Recibe nombre de un archivo y un entero, retorna mensaje de éxito o fracaso 
   * sobre su respectiva subida
   * @param string $nombreArchivo
   * @param int $pudo
   * @return string
   */
  public function mostrarMensaje($nombreArchivo, $pudo)
  {
    $mensaje = "Lo siento, hubo un error al cargar su archivo.";

    switch ($pudo) {
      case 1:
        $mensaje = "Lo siento solo se permiten archivos PDF o DOC. \n";
        break;
      case 2:
        $mensaje = "El tamaño supera el límite. Máx. 2MB";
        break;
      case 3:
        $mensaje = "El archivo " . $nombreArchivo . " se ha subido con éxito <br />";
        $mensaje .= '<div class = "textoCentrado" ><a href= "../../Archivos/'.$nombreArchivo.'">Ver archivo</a></div>';
        break;
    }
    return $mensaje;
  }
}
