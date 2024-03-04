<?php
include_once '../../configuracion.php';

$nombreArchivo = strtolower($_FILES['archivoSubido']['name']);

$objetoPdf = new CargaPdf();

$pudo = $objetoPdf->analizarArchivoPdf($nombreArchivo);
$mensaje = $objetoPdf->mostrarMensaje($nombreArchivo, $pudo);

$tituloPagina = "Ejercicio 1 del TP3";
$tp = "botonTP3";
$ejercicio = "botonEjer1";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">

  <?php
  echo $mensaje;
  ?>

  <div id="contieneLinkVolver">
        <a href="formulario.php" id="linkVolver"><br> Volver <a>
  </div>

</div>

<?php
include_once('../estructura/pie.php');
?>