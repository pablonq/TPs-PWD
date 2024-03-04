<?php
$tituloPagina = "Ejercicio 2.1 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer1";

include_once('../estructura/encabezado.php');
?>
<!-- 
                tp1 ejercicio 1
                Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe 
                llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número 
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la 
                respuesta, que permita volver a la página anterior.
            -->

<div class="contenedorEnunciado">
    Ingrese un número para saber si es positivo, negativo o cero
</div>
<div class="contenedorCentrado ">
    <form name="formulario" id="formulario" method="post" action="formAccion.php" novalidate>
    <table>
            <tr>
               <td> <label>Ingrese un número:</label></label>
            </tr>
            <tr>
                <td> <input type="number" name="numero" id="numero" step="any" required></td>
            </tr>
            <tr>
               <td><label id="nombreForm-error" class="error manual-error" for="numero"></label>
            </td></tr>
        </table>
        <input type="submit" name="Submit" id="submit"  value="Enviar" class="botonFormulario">
    </form>
    <script type="text/javascript" src="verificacion_jquery.js"></script>
</div>


<?php
include_once('../estructura/pie.php');
?>