<?php
$tituloPagina = "Ejercicio 6 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer6";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp1 ejercicio 6
            -->
<div class="contenedorEnunciado">
    Complete los datos del formulario
</div>

<div class="contenedorCentrado">
    <form name="form_ejercicio6" method="get" action="formAccion.php">
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
            <tr>
                <td colspan="2">
                    Indique su nivel de estudios
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="estudios" id="estudios1" value="no tiene" required> No tiene estudios
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="estudios" id="estudios2" value="primarios"> Estudios primarios
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="radio" name="estudios" id="estudios3" value="secundarios"> Estudios secundarios
                </td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td>
                    <select id="sexoForm" name="sexoForm">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Indique si practica alguno <br> de estos deportes
                </td>
            </tr>
            <tr>
                <td>Voley</td>
                <td><input type="checkbox" name="deporte[]" id="deporte[]" value="voley"></td>
            </tr>
            <tr>
                <td>Basquet</td>
                <td> <input type="checkbox" name="deporte[]" id="deporte[]" value="basquet"></td>
            </tr>
            <tr>
                <td>Futbol</td>
                <td><input type="checkbox" name="deporte[]" id="deporte[]" value="futbol"></td>
            </tr>
            <tr>
                <td>Tennis</td>
                <td><input type="checkbox" name="deporte[]" id="deporte[]" value="tennis"></td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="Enviar" class="botonFormulario">
    </form>
</div>


<?php
include_once('../estructura/pie.php');
?>