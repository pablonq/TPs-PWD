<?php
$tituloPagina = "Ejercicio 2.8 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer8";

include_once('../estructura/encabezado.php');
?>
<!-- 
    tp1 ejercicio 8
-->

<div class="contenedorEnunciado">
    Calcular tarifa para entrada de cine
</div>
<div class="contenedorCentrado ">
    <form id="form8" name="form8" method="post" action="formAccion.php">
        <table>
            <tr>
                <td colspan="2">
                    Para calcular la tarifa ingrese <br> los siguientes datos
                </td>
            </tr>
            <tr>
                <td>
                    <label for="edad">Edad:</label>
                </td>
                <td>
                    <input type="number" id="edad" name="edad">
                </td>
            </tr>
            <tr><td></td><td><label id="nombreForm-error" class="error manual-error" for="edad"></label></td></tr>
            <tr>
                <td>
                    <label for="estudia">Estudia</label>
                </td>
                <td>
                    <input type="radio" name="estudia" value="si">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="estudia">No estudia</label>
                </td>
                <td>
                    <input type="radio" name="estudia" value="no">
                </td>
            </tr>
            <tr><td></td><td><label id="nombreForm-error" class="error manual-error" for="estudia"></label></td></tr>
            <tr>
                <td colspan="2">
                    <div>
                        <input type="submit" name="submit" id="submit" value="Enviar" class="botonFormulario">
                    </div>
                </td>
            </tr>
        </table>
    </form>
    <script type="text/javascript" src="funciones.js"></script>
    <script type="text/javascript" src="verificacion.js"></script>
</div>

<?php
include_once('../estructura/pie.php');
?>