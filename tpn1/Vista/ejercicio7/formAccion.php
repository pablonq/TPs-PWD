<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$obj = new Calculadora();
$resultado = $obj->calcular($datos);

$tituloPagina = "Ejercicio 7 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer7";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorEnunciado">
    Operaciones matemáticas
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