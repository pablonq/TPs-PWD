<?php
class CargaArchivo
{
  /**
   * Analiza si el archivo recibido es admitido, retorna booleano
   * con la respuesta
   * @param string $nombreArchivo
   * @return boolean
   */
  function analizarArchivo($nombreArchivo)
  {
    $nombreArchivo = strtolower($nombreArchivo);
    $subirOk = true;

    //Controlo que sea una imagen
    $mystring = $nombreArchivo;
    $encontrar   = '.png';
    $encontrar2   = '.jpg';
    $pos1 = strpos($mystring, $encontrar);
    $pos2 = strpos($mystring, $encontrar2);

    //Controlo formatos
    if ($pos1 === false && $pos2 === false) {
      $subirOk = false;
    } else if (move_uploaded_file($_FILES['imagenPeli']['tmp_name'], '../../Archivos/' . $nombreArchivo)) {
      $subirOk = true;
    }

    return $subirOk;
  }

  /**
   * Recibe array con datos de una película, retorna cadena de string
   * con datos de la misma y un archivo en caso de ser admitido
   * @param array $datos
   * @return mixed
   */
  public function generarCartelera($datos)
  {
    $titulo = $datos["titulo"];
    $actores = $datos["actores"];
    $director = $datos["director"];
    $guion = $datos["guion"];
    $produccion = $datos["produccion"];
    $anio = $datos["anio"];
    $nacionalidad = $datos["nacionalidad"];
    $genero = $datos["genero"];
    $duracion = $datos["duracion"];
    $opcionEdad = $datos["opcionEdad"];

    $nombreArchivo = strtolower($_FILES['imagenPeli']['name']);
    $fueCargado = $this->analizarArchivo($nombreArchivo);

    if ($fueCargado == false) {
      $mensaje = 'El archivo no puede ser cargado, revise que el formato sea PNG o JPG';
    } else {
      $mensaje = "";
    }

    //Evalúa generos 
    if ($genero == 1) {
      $valorGenero = "Terror";
    } else if ($genero == 2) {
      $valorGenero = "Comedia";
    } else if ($genero == 3) {
      $valorGenero = "Ciencia Ficcion";
    } else if ($genero == 4) {
      $valorGenero = "Animada";
    } else if ($genero == 5) {
      $valorGenero = "Triller";
    } else {
      $valorGenero = "Accion";
    }

    //Evalúa edad
    if ($opcionEdad == 1) {
      $edad = " Todo Público.";
    } else if ($opcionEdad == 2) {
      $edad = " Mayores de 7 años";
    } else {
      $edad = "Mayores de 18 años";
    }

    $pelicula =
      "<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
        <h4 id='textPeli'>La pelìcula introducida es</h4>
        <p><strong>$mensaje</strong></<p>
        <img src='../../Archivos/$nombreArchivo' height='70px' width='70px' border='2px' alt='Pelicula'/>
        <br/>
        <p ><strong>Titulo:</strong> $titulo <br/>
           <strong>Actores:</strong>$actores <br/>
           <strong>Director:</strong> $director <br/>
           <strong>Guiòn:</strong> $guion<br/>
           <strong>Producion:</strong> $produccion<br/>
           <strong>Año:</strong> $anio <br/>
           <strong>Nacionalidad:</strong> $nacionalidad <br/>
           <strong>Gènero:</strong>  $valorGenero<br/>
           <strong>Duraciòn:</strong>$duracion<br/>
           <strong>Restrincciones de edad:</strong> $edad <br/>
        </p>
       </div>
    </div>";

    return $pelicula;
  }
}
