<?php
$tituloPagina = "Ejercicio 3 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer3";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp1 ejercicio 3
                Crear una página php que contenga un formulario HTML como el que se indica en la 
                imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php 
                que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy 
                nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                Cambiar el método Post por Get y analizar las diferencias
            -->

<div class="contenedorEnunciado">
    Complete los datos para crear un saludo personalizado
</div>

<div class="contenedorCentrado">
    <form name="form_ejercicio3" method="get" action="formAccion.php">
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