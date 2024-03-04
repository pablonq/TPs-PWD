<?php
class CargaTxt
{
  /**
   * Analiza si el archivo ingresado corresponde a un archivo .txt,
   * retorna número entero dependiendo si es válido o no
   * @param string $nombreArchivo
   * @return int
   */
  function analizarArchivoTxt($nombreArchivo)
  {
    $mystring = $nombreArchivo;
    $encontrar   = '.txt';
    $pos = strpos($mystring, $encontrar);

    //controlar formatos
    if ($pos === false) {
      $mensaje = 0;
    } else if (move_uploaded_file($_FILES['archivoSubido']['tmp_name'], '../../archivos/' . $nombreArchivo)) {
      $mensaje = 1;
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
    if ($pudo == 0) {
      $mensaje = "<h3>Lo siento, solo se permiten archivos txt.</h3>\n";
    } else {
      //Convertir el contenido en un textarea
      $archivo = file_get_contents('../../Archivos/' . $nombreArchivo);
      $mensaje = "<div class='contenedorEnunciado'>
                       <p>Este es el contenido de su archivo de texto cargado</p>
                 </div>
                 <textarea rows='30' cols='50'>$archivo</textarea>";
    }

    return $mensaje;
  }
}
