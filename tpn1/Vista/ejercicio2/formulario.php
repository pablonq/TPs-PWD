<?php
$tituloPagina = "Ejercicio 2 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer2";

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
    <form name="form_ejercicio2" method="get" action="formAccion.php">
        <table>
            <tr>
                <td>Lunes</td>
                <td><input type="number" step="any" name="hsLunes" id="hsLunes" min=0 required></td>
            </tr>
            <tr>
                <td>Martes</td>
                <td><input type="number" step="any" name="hsMartes" id="hsMartes" min=0 required></td>
            </tr>
            <tr>
                <td>Miercoles</td>
                <td><input type="number" step="any" name="hsMiercoles" id="hsMiercoles" min=0 required></td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td><input type="number" step="any" name="hsJueves" id="hsJueves" min=0 required></td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td><input type="number" step="any" name="hsViernes" id="hsViernes" min=0 required></td>
            </tr>
        </table>
        <input type="submit" name="Submit" value="Enviar" class="botonFormulario">
    </form>
</div>

<?php
include_once('../estructura/pie.php');
?>