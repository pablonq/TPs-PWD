<?php
$tituloPagina = "Ejercicio 1 del TP1";
$tp = "botonTP1";
$ejercicio = "botonEjer1";

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

<div class="contenedorCentrado" class="contenedorCentradoChico">
    <form name="form_ejercicio1" method="post" action="formAccion.php">
        Ingrese un número: <input type="number" name="numero" id="numero" step="any" required><br>
        <input type="submit" name="Submit" value="Enviar" class="botonFormulario">
    </form>
</div>

<?php
include_once('../estructura/pie.php');
?>