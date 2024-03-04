<?php
$tituloPagina = "Ejercicio 8 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer8";

include_once('../estructura/encabezado.php');
?>
<!-- 
                        tp1 ejercicio 8
                    -->

<div class="contenedorEnunciado">
    Calcular tarifa para entrada de cine
</div>
<div class="contenedorCentrado">
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
                    <input type="number" id="edad" name="edad" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="estudia">Estudia</label>
                </td>
                <td>
                    <input type="radio" name="estudia" value="si" required>
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
            <tr>
                <td colspan="2">
                    <div>
                        <input type="submit" name="submit" value="Enviar" class="botonFormulario">
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php
include_once('../estructura/pie.php');
?>