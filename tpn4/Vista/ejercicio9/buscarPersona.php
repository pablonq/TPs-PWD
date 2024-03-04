<?php 
    $tituloPagina = "Ejercicio 9 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer9";
    $rutaEstructura = "../";
    $correccionRuta = "1";
    
    include_once('../estructura/encabezado.php');
?>

    <div class="contenedorEnunciado">
        Ingrese un número de documento para buscar los datos de esa persona
    </div>

    <div class="contenedorCentrado">
    <div class="textoCentrado contenedorSeparadoAbajo titulosDiv">Buscar persona por DNI</div>
    <form name="form_ejercicio9" method="post" action="accion/AccionBuscarPersona.php" class="needs-validation " novalidate>
                 DNI persona:<input type="text" id="NroDni" name="NroDni" placeholder="22985265" pattern="[0-9]{8}" maxlength="9" required><br>
                 <div class="valid-feedback">
                   Muy bien!
                </div>
                <div class="invalid-feedback">
                   Debe ingresar un DNI, debe ser sin espacios y sin puntos!
                </div>
                <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Buscar">
                </form>
                <div class="contieneLink contenedorSeparadoArriba">
                    <a href="../ejercicio5/listaPersonas.php">Lista de personas cargadas</a>
                </div>
                
    <script src="../estructura/js/validarCamposVacios.js"></script>
    </div>

<?php
    include_once('../estructura/pie.php');
?>