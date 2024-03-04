<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$obj = new CuentaHoras();
$resultado = $obj->sumarHoras($datos);

$tituloPagina = "Ejericio 2 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer2";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorEnunciado">
    Resultado
</div>
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