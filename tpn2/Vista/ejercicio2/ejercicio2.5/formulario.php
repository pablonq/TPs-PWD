<?php
$tituloPagina = "Ejercicio 2.5 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer5";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorEnunciado">
    Complete los datos del formulario
</div>

<div class="contenedorCentrado ">
    <form id="form3" name="form3" method="post" action="formAccion.php">

        <div class="datosPersonales">
            <h5>Datos personales</h5>

            <table>
                <tr>
                    <td>
                        Nombre:
                    </td>
                    <td>
                        <input type="text" id="nombre" name="nombre">
                    </td>
                </tr>
                <tr><td></td><td><label id="nombreForm-error" class="error manual-error" for="nombre"></label></td></tr>

                <tr>
                    <td>
                        Apellido:
                    </td>
                    <td>
                        <input type="text" id="apellido" name="apellido">
                    </td>
                </tr>
                <tr><td></td><td><label id="nombreForm-error" class="error manual-error" for="apellido"></label></td></tr>
                <tr>
                    <td>
                        Edad:
                    </td>
                    <td>
                        <input type="text" id="edad" name="edad">
                    </td>
                </tr>
                <tr><td></td><td><label id="nombreForm-error" class="error manual-error" for="edad"></label></td></tr>
                <tr>
                    <td>
                        Direcci&oacute;n:
                    </td>
                    <td>
                        <input type="text" id="direccion" name="direccion">
                    </td>
                </tr>
                <tr><td></td><td><label id="nombreForm-error" class="error manual-error" for="direccion"></label></td></tr>
            </table>
        </div>

        <div class="estudios">
            <h5>Nivel de estudios</h5>

            <label for="estudios">No tiene estudios<input type="radio" name="estudios" value="ninguno"></label>
            <br>
            <label for="estudios">Estudios primarios<input type="radio" name="estudios" value="primarios"></label>
            <br>
            <label for="estudios">Estudios secundarios<input type="radio" name="estudios" value="secundarios"></label>
            <br>
            <label id="estudios-error" class="error" for="estudios"></label>
        </div>


        <div class="sexo">
            <h5>Sexo</h5>

            <label for="sexo">Indique uno</label>
            <select id="sexo" name="sexo">
                <option value="femenino">femenino</option>
                <option value="masculino">masculino</option>
            </select>
        </div>

        <div class="botonEnviar">
            <input type="submit" id="submit" name="submit" value="Enviar">
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="funciones.js"></script>
    <script type="text/javascript" src="verificacion.js"></script>
</div>

<?php
include_once('../estructura/pie.php');
?>