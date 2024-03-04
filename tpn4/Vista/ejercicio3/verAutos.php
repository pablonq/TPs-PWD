<?php 
    $tituloPagina = "Ejercicio 3 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer3";
    $rutaEstructura = "../";
    $correccionRuta = "1";
    
    include_once('../estructura/encabezado.php');
    include_once("../../configuracion.php");

    $objAuto = new AbmAuto();

    $colInfo = $objAuto->buscarColInfo("");
    $hayAutos = false;
    
    if (count($colInfo) > 0){
        $hayAutos = true;
    }
?>
    <div class="contenedorEnunciado">
        Lista de autos cargados en la base de datos
    </div>

    <div class="contenedorCentrado">
    <div class="textoCentrado contenedorSeparado"><h4><strong>Lista de autos</strong></h4></div>
    <hr class='hrDivisor'>
    
        <?php
            if($hayAutos){
                echo "<table>";
                echo "<tr>";
                echo "<td><strong>Patente</strong></td><td><strong>Marca</strong></td><td><strong>Modelo</strong></td><td><strong>DNI Dueño</strong></td><td><strong>Apellido y Nombre</strong></td>";
                echo "</tr>";
                echo "<tr><td colspan='6'><hr></td></tr>";
                for ($i = 0; $i < count($colInfo); $i++){
                    $patente = $colInfo[$i]['patente'];
                    $marca = $colInfo[$i]['marca'];
                    $modelo = $colInfo[$i]['modelo'];
                    $dni = $colInfo[$i]['objPersona']['nroDni'];
                    $apellido = $colInfo[$i]['objPersona']['apellido'];
                    $nombre = $colInfo[$i]['objPersona']['nombre'];
                    echo "<tr>";
                    echo "<td>".$patente."</td><td>".$marca."</td><td>".$modelo."</td><td>".$dni."</td><td>".$apellido." ".$nombre."</td>";
                    echo "<tr>";
                    echo "<tr><td colspan='6'><hr class='hrDivisor'></td></tr>";
                }
                echo "</table>";
            } else {
                echo "No se encontraron autos cargados en la base de datos";
            }
        ?>
    </div>

<?php
    include_once('../estructura/pie.php');
?>