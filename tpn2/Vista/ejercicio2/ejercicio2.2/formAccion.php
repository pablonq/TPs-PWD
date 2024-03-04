<?php
include_once '../../../configuracion.php';

$datos = data_submitted();
$obj = new CuentaHoras();
$resultado = $obj->sumarHoras($datos);

$tituloPagina = "Ejercicio 2.2 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer2";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">

    <?php
    echo $resultado;
    ?>

    <div id="contieneLinkVolver">
        <a href="formulario.php" id="linkVolver"><br> Volver <a>
    </div>
</div>

<?php
include_once('../estructura/pie.php');
?>