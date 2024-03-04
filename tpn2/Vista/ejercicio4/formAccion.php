<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$obj = new MostrarDatos();
$cartelera = $obj->generarCartelera($datos);

$tituloPagina = "Ejercicio 4 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer4";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">
    <div class='content rounded-1 shadow'>
        <div class="header border-bottom-0 d-flex align-items-right">
            <h1>La pelicula introducida es</h1>
            <a href='ejercicio4.php'><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button></a>
        </div>
        <div class='body py-0'>
            <?php
            echo $cartelera;
            ?>
        </div>
    </div>
    <div id="contieneLinkVolver">
        <a href="ejercicio4.php" id="linkVolver"><br> Volver <a>
    </div>
</div>
<?php
include_once('../estructura/pie.php');
?>