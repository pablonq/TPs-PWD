<?php
    $tituloPagina = "Ejercicio 8 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer8";
    $rutaEstructura = "../../";
    $correccionRuta = "2";

    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");

    $metodo = data_submitted();

    $objAuto = new AbmAuto();
    $objPersona = new AbmPersona();

    $busqueda['Patente'] = $metodo['Patente'];

    $datosAuto = $objAuto->buscar($busqueda);

    $nroDni["NroDni"] = $metodo["DniDuenio"];
    $datosPersona = $objPersona->buscar($nroDni);
?>

    <div class="contenedorEnunciado">
        Ingrese una patente y un número de documento para realizar el cambio de dueño de ese vehículo
    </div>

    <div class="contenedorCentrado">
        <div class="textoCentrado contenedorSeparadoAbajo titulosDiv">Cambio de Dueño</div>
        <div class="container-fluid">
            <div class="container col-md-10">
                <div class="contenedorSeparadoAbajo">Resultado de la operación:</div>
                <div class="mb-3">
                    <?php
                    if ($datosAuto != null) {
                        if ($datosPersona != null) {
                            $datosModificados = ["Patente" => $metodo["Patente"], "DniDuenio" => $metodo["DniDuenio"], "Marca" => $datosAuto[0]->getMarca(), "Modelo" => $datosAuto[0]->getModelo()];
                            if ($objAuto->modificacion($datosModificados)) {
                                echo '<p class="lead text-success">El cambio de dueño se realizó correctamente!</p>';
                            } else {
                                echo '<p class="lead text-danger">Se ingreso el mismo dueño!</p>';
                            }
                        } else {
                            echo '<p class="lead text-danger">La persona no se encuentra en la base de datos!</p>';
                        }
                    } else {
                        echo ' <p class="lead text-danger">El auto no se encuentra en la base de datos!</p>';
                    }
                    ?>
                </div>
                <div>
                    <div id="contieneLinkVolver">
                        <a href="../cambioDuenio.php">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>