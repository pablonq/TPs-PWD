<?php
$tituloPagina = "Ejercicio 4 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer4";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp1 ejercicio 4
                Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar 
                esos datos a otra página en donde se muestren mensajes distintos dependiendo si la 
                persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                Enviar los datos usando el método GET y luego probar de modificar los datos 
                directamente en la url para ver los dos posibles mensajes.
            -->

<div class="contenedorEnunciado">
    Complete los datos del formulario
</div>

<div class="contenedorCentrado">
    <form name="form_ejercicio4" method="get" action="formAccion.php">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombreForm" id="nombreForm" minlength="3" required></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellidoForm" id="apellidoForm" minlength="3" required></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><input type="number" name="edadForm" id="edadForm" min="0" required></td>
            </tr>
            <tr>
                <td>Dirección:</td>
                <td><input type="text" name="direccionForm" id="direccionForm" required></td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="Enviar" class="botonFormulario">
    </form>
</div>

<?php
include_once('../estructura/pie.php');
?>