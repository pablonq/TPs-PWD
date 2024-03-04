<?php 
    $tituloPagina = "Ejercicio 5 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer5";
    $rutaEstructura = "../";
    $correccionRuta = "1";
    
    include_once('../estructura/encabezado.php');
?>

    <div class ="contenedorEnunciado">
        Ingrese un DNI para listar todos los autos que estan registrados a el
    </div>

    <div class="contenedorCentrado">
        <div class="textoCentrado contenedorSeparadoAbajo titulosDiv"><strong>Listar autos registrados por dni</strong></div>

        <form name="form_ejercicio4" method="post" action="accion/formAccion.php" class="needs-validation " novalidate>
        DNI Dueño: <input type="text"  pattern="[0-9]{8}" id="NroDni" name="NroDni" placeholder="25456875" maxlength="8" required><br>
        <div class="valid-feedback">
        Muy bien!
        </div>
        <div class="invalid-feedback">
        Debe ingresar un DNI, debe ser sin espacios y sin puntos!
        </div>
        <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Buscar">
        </form>
        <div id="contieneLinkVolver">
            <a href="listaPersonas.php" id="linkVolver">Volver<a>
        </div>
        <script src="../estructura/js/validarCamposVacios.js"></script>
    </div>

<?php
    include_once('../estructura/pie.php');
?>