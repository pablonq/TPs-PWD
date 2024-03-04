<?php 
    $tituloPagina = "Ejercicio 7 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer7";
    $rutaEstructura = "../";
    $correccionRuta = "1";
    
    include_once('../estructura/encabezado.php');
?>
    <div class="contenedorEnunciado">
        Ingrese los datos de un auto para cargarlos en la base de datos
    </div>

    <div class="contenedorCentrado">
    <div class="textoCentrado contenedorSeparadoAbajo titulosDiv">Nuevo Auto</div>
    <form name="form_ejercicio6" method="post" action="accion/accionNuevoAuto.php"  class="needs-validation" novalidate>
        <table>
            <tr>
                <td>Patente:</td>
                <td>
                <input type="text"  id="Patente" name="Patente" placeholder="AAA 111" pattern="[A-Z]{3}[ ]{1}\d{3}" maxlength="7" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                Debe ingresar una Patente valida! (AAA 111)
                </div>
               </td>
            </tr>
            <tr>
                <td>Marca:</td>
                <td><input type="text"  id="Marca" name="Marca" pattern="([a-zA-Z]{1,20})" placeholder="Marca" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar una marca!
                </div>
                </td>
            </tr>
            <tr>
                <td>Modelo:</td>
                <td><input type="text" id="Modelo" name="Modelo"  placeholder="Modelo" pattern="([0-9]{1,4})" maxlength="11" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un modelo!
                </div>
                </td>
            </tr>
            <tr>
                <td>DNI Dueño:</td>
                <td><input type="text"  id="DniDuenio" name="DniDuenio" placeholder="22985265" pattern="[0-9]{8}" maxlength="8" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                Debe ingresar un DNI, debe ser sin espacios y sin puntos!
                </div>
            </td>
            </tr>
            
            
       </table>
           <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Ingresar nuevo Auto">
    </form>
    <script src="../estructura/js/validarCamposVacios.js"></script>
    </div>

    

<?php
    include_once('../estructura/pie.php');
?>