<?php
$tituloPagina = "Ejercicio 2.3 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer3";

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

<div class="contenedorCentrado ">
<form name="form" id="form" method="get" action="formAccion.php" novalidate>
        <table>
            <tr>
                <td><label>Nombre:</label></td>
                <td><input type="text" name="nombreForm" id="nombreForm" minlength="3" required></td>
            </tr>
            <tr><td></td><td><label id="nombreForm-error" class="error manual-error" for="nombreForm"></label></td></tr>
            <tr>
                <td><label >Apellido:</label></td>
                <td><input type="text" name="apellidoForm" id="apellidoForm" minlength="3" required></td>
            </tr>
            <tr><td></td><td><label id="apellidoForm-error" class="error manual-error" for="apellidoForm"></label></td></tr>
            <tr>
                <td><label >Edad</label></td>
                <td><input type="number" name="edadForm" id="edadForm" min="0" required></td>
            </tr>
            <tr><td></td><td><label id="edadForm-error" class="error manual-error" for="edadForm"></label></td></tr>
            <tr>
                <td><label >Direccion:</label></td>
                <td><input type="text" name="direccionForm" id="direccionForm" required></td>
            </tr>
            <tr><td></td><td><label id="direccionForm-error" class="error manual-error" for="direccionForm"></label></td></tr>
        </table>
        <input type="submit" name="submit" id="submit" value="Enviar" class="botonFormulario">
    </form>
    <script type="text/javascript" src="verificacion.js"></script>
</div>



<?php
include_once('../estructura/pie.php');
?>