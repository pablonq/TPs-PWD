<?php 
    $tituloPagina = "Ejercicio 6 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer6";
    $rutaEstructura = "../";
    $correccionRuta = "1";

    include_once('../estructura/encabezado.php');
?>
    <!-- 
        tp4 ejercicio 6
    -->

    <div class="contenedorEnunciado">
        Ingrese los datos de una persona para cargarlos en la base de datos
    </div>

    <div class="contenedorCentrado">
    <div class="textoCentrado contenedorSeparadoAbajo titulosDiv">Nueva Persona</div>
    <form name="form_ejercicio6" method="post" action="accion/accionNuevaPersona.php"  class="needs-validation" novalidate>
        <table>
            <tr>
                <td>Dni:</td>
                <td>
                <input type="text"  id="NroDni" name="NroDni" placeholder="22985265" pattern="[0-9]{8}" maxlength="8" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                Debe ingresar un DNI, debe ser sin espacios y sin puntos!
                </div>
               </td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text"  id="Apellido" name="Apellido" pattern="([a-zA-Z]{1,20})" placeholder="Apellido" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un apellido!
                </div>
                </td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" id="Nombre" name="Nombre" pattern="([a-zA-Z]{1,20})" placeholder="Nombre" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un nombre!
                </div>
                </td>
            </tr>
            <tr>
                <td>Fecha Nacimiento:</td>
                <td><input type="date"  id="fechaNac" name="fechaNac" placeholder="1990-01-01" min="1917-01-01" max="2005-01-01" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                   Revise la fecha, debe tener el formato "1990-01-01" !
                </div>
            </td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><input type="text" id="Telefono" name="Telefono" pattern="\d{3}[-]{1}\d{7}" maxlength="11" placeholder="299-9854155" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                  Debe ingresar codigo de area sin 0 "-" y tel sin 15!
                </div>
                </td>
            </tr>
            <tr>
                <td>Domicilio:</td>
                <td><input type="text" id="Domicilio" name="Domicilio" placeholder="Sarmiento 55" required>
                <div class="valid-feedback">
                    Muy bien!
                </div>
                <div class="invalid-feedback">
                    Debe ingresar un domicilio!
                </div>
                </td>
            </tr>
       </table>
           <input type="submit" name="boton_enviar" class="btn btn-dark mt-2" id="boton_enviar" value="Ingresar nueva persona">
    </form>
    <script src="../estructura/js/validarCamposVacios.js"></script>
    </div>

<?php
    include_once('../estructura/pie.php');
?>