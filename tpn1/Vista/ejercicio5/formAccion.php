<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$obj = new DatosPersona2();
$cadenaDatos = $obj->datosPersonales($datos);

$tituloPagina = "Ejericio 5 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer5";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorEnunciado">
    Resultado datos personales
</div>
<div class="contenedorCentrado">

    <?php
    echo $cadenaDatos;
    ?>

    <div id="contieneLinkVolver">
        <a href="formulario.php" id="linkVolver"><br> Volver <a>
    </div>
</div>

<?php
include_once('../estructura/pie.php');
?>