<?php
$tituloPagina = "Ejercicio 1 del TP3";
$tp = "botonTP3";
$ejercicio = "botonEjer1";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorEnunciado">
    Cargue un archivo .doc o .pdf para visualizarlo
</div>

<div class="contenedorCentrado">
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Cargar archivo pdf o doc</td>
                <td><input id="archivoSubido" name="archivoSubido" type="file" class="form-control" required /></td>
            </tr>

        </table>
        <input type="submit" value="Enviar Archivo" name="submit" class="botonFormulario" />
    </form>
</div>
<?php
include_once('../estructura/pie.php');
?>