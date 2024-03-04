<?php
$tituloPagina = "Ejercicio 2.2 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer2";

include_once('../estructura/encabezado.php');
?>
<!-- 
    tp1 ejercicio 2
    Crear una página php que contenga un formulario HTML que permita ingresar las horas 
    de cursada, de la materia Programación Web Dinámica, por cada día de la semana. 
    Enviar los datos del formulario por el método Get a otra página php que los reciba y 
    complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que 
    se cursan por semana.
-->

<div class="contenedorEnunciado">
    Ingrese las horas de cursada por día de la materia programación web dinámica
</div>

<div class="contenedorCentrado">
    <form name="form" id="form" method="get" action="formAccion.php" novalidate>
        <table>
            <tr>
                <td><label>Lunes</label></td>
                <td><input type="number" step="any" name="hsLunes" id="hsLunes" min=0 max=24></td>
            </tr>
            <tr>
               <td></td>
               <td><label id="hsLunes-error" class="error manual-error" for="hsLunes"></label> </td>
            </tr>
            <tr>
                <td><label>Martes</label></td>
                <td><input type="number" step="any" name="hsMartes" id="hsMartes" min=0 max=24></td>
            </tr>
            <tr>
                <td></td>
                <td><label id="hsMartes-error" class="error manual-error" for="hsMartes"></label> </td>
            </tr>
            <tr>
                <td><label>Miercoles</label></td>
                <td><input type="number" step="any" name="hsMiercoles" id="hsMiercoles" min=0 max=24></td>
            </tr>
            <tr>
                <td></td>
                <td><label id="hsMiercoles-error" class="error manual-error" for="hsMiercoles"></label> </td>
            </tr>
            <tr>
                <td><label>Jueves</label></td>
                <td><input type="number" step="any" name="hsJueves" id="hsJueves" min=0 max=24></td>
            </tr>
            <tr>
                <td></td>
                <td><label id="hsJueves-error" class="error manual-error" for="hsJueves"></label> </td>
            </tr>
            <tr>
                <td><label>Viernes</label></td>
                <td><input type="number" step="any" name="hsViernes" id="hsViernes" min=0 max=24></td>
            </tr>
            <tr>
                <td></td>
                <td><label id="hsViernes-error" class="error manual-error" for="hsViernes"></label> </td>
            </tr>
        </table>
        <input type="submit" name="submit" id="submit"  value="Enviar" class="botonFormulario">
    </form>
    <script type="text/javascript" src="verificacion_jquery.js"></script>
</div>

<?php
include_once('../estructura/pie.php');
?>