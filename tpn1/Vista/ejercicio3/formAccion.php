<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$obj = new SaludoPersonalizado();
$respuesta = $obj->crearSaludo($datos);

$tituloPagina = "Ejericio 3 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer3";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorEnunciado">
    Resultado saludo
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