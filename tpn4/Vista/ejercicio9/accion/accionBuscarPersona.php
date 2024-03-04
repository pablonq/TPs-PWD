<?php 
    $tituloPagina = "Ejercicio 9 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer9";
    $rutaEstructura = "../../";
    $correccionRuta = "2";
    
    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");

    $datos = data_submitted();
    $objPersona = new AbmPersona();

    $listaPersona=$objPersona->buscar($datos);
    $contListaP = count($listaPersona);
?>

    <div class="contenedorEnunciado">
        Datos de la persona encontrada. Los datos pueden ser modificados y actualizados
    </div>

    <div class="contenedorCentrado">
        <?php
            if ($contListaP == 0){
                echo "No existe persona cargada con ese DNI en la base de datos
                <div id='contieneLinkVolver'>
                    <a href='../buscarPersona.php' id='linkVolver'>Volver<a>
                </div>";
            } else {
                echo "<div class='textoCentrado contenedorSeparadoAbajo titulosDiv'>Datos de la persona buscada <br> DNI: ".$datos['NroDni']."</div>";
                echo "<div class='textoCentrado contenedorSeparadoAbajo'> Modifique los datos que desee cambiar</div>";
                echo "<form method='post' action='actualizarDatosPersona.php' class='needs-validation' novalidate>";
                echo "<table>";
                echo "<tr>";
                echo "<td>Dni:</td>";
                echo "<td>";
                echo "<input type='text'  id='NroDni' name='NroDni'  value=".$listaPersona[0]->getNroDni()." placeholder='22985265' pattern='[0-9]{8}' maxlength='8' required readonly>";
                echo " <div class='valid-feedback'>
                                Muy bien!
                            </div>
                            <div class='invalid-feedback'>
                                Debe ingresar un DNI!
                            </div>
                        </td>
                        </tr>
                        <tr>
                            <td>Apellido:</td>";
                echo "<td><input type='text' value='".$listaPersona[0]->getApellido()."' id='Apellido' name='Apellido' pattern='([a-zA-Z]{1,20})' placeholder='Apellido' required>";
                echo "<div class='valid-feedback'>
                            Muy bien!
                        </div>
                        <div class='invalid-feedback'>
                            Debe ingresar un apellido!
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>";
                echo "<td><input type='text' value='".$listaPersona[0]->getNombre()."'  id='Nombre' name='Nombre' pattern='([a-zA-Z]{1,20})' placeholder='Nombre' required>";
                echo "<div class='valid-feedback'>
                            Muy bien!
                        </div>
                        <div class='invalid-feedback'>
                            Debe ingresar un nombre!
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento:</td>";
                echo "<td><input type='date' value='".$listaPersona[0]->getFechaNac()."' id='fechaNac' name='fechaNac' placeholder='1922-01-01' min='1922-01-01' max='2004-01-01' required>";
                echo "<div class='valid-feedback'>
                            Muy bien!
                        </div>
                        <div class='invalid-feedback'>
                        Revise la fecha!
                        </div>
                    </td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>";
                echo "<td><input type='text' value='".$listaPersona[0]->getTelefono()."' id='Telefono' name='Telefono' pattern='\d{3}[-]{1}\d{7}' maxlength='11' placeholder='299-9854155' required>";
                echo "<div class='valid-feedback'>
                            Muy bien!
                        </div>
                        <div class='invalid-feedback'>
                        Debe ingresar codigo de area sin 0 '-' y tel sin 15!
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Domicilio:</td>";
                echo "<td><input type='text' value='".$listaPersona[0]->getDomicilio()."' id='Domicilio' name='Domicilio' placeholder='Sarmiento 55' required>";
                echo "<div class='valid-feedback'>
                                Muy bien!
                            </div>
                            <div class='invalid-feedback'>
                                Debe ingresar un domicilio!
                            </div>
                            </td>
                        </tr>
                </table>
                <input type='submit' name='boton_enviar' class='btn btn-dark mt-2' id='boton_enviar' value='MODIFICAR DATOS'>
                </form>
                <script src='../estructura/js/validarCamposVacios.js'></script>";
            }
        ?>
    </div>
<?php
    include_once('../../estructura/pie.php');
?>