<?php
include_once '../../configuracion.php';

$dato = data_submitted();
$obj = new PositividadNumero();
$respuesta = $obj->clasificarNumero($dato);

$tituloPagina = "Ejericio 1 del TP1 ";
$tp = "botonTP1";
$ejercicio = "botonEjer1";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorEnunciado">
    Ingrese un número para saber si es positivo, negativo o cero
</div>
<div class="contenedorCentrado">

    <?php
    echo $respuesta;
    ?>

    <div id="contieneLinkVolver">
        <a href="formulario.php" id="linkVolver"><br> Volver <a>
    </div>
</div>

<?php
include_once('../estructura/pie.php');
?>