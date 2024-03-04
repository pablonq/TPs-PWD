<?php 
    $tituloPagina = "Ejercicio 5 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer5";
    $rutaEstructura = "../../";
    $correccionRuta = "2";
    
    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");
    
    $datos = data_submitted();
    $controlAuto = new AbmAuto();
    $controlPersona = new AbmPersona();

    $dniAuto['DniDuenio'] = $datos['NroDni'];

    $colAutos = $controlAuto->buscarColInfo($dniAuto);
    $datosPersona = $controlPersona->buscarColInfo($datos);
?>
    <div class ="contenedorEnunciado">
        Ingrese un DNI para listar todos los autos que estan registrados a el
    </div>

    <div class="contenedorCentrado">
    <div class="textoCentrado">Lista de autos registrados con el DNI: <?php echo $datos['NroDni'];?></div>
        <div class="tablaCentrada">
        <?php
        if(count($datosPersona)==1){
            echo '<table>
            <tr>
                <th style="text-align:center" colspan="3">'.$datosPersona[0]['nombre'].' '.$datosPersona[0]['apellido'].'</th>
            </tr>';
            echo "<tr><td colspan='3'><hr class='hrDivisor'></td></tr>";
            if(count($colAutos)>0){
                echo "<tr>
                <th><strong>Patente</strong></th>
                <th><strong>Marca</strong></th>
                <th><strong>Modelo</strong></th>        
                </tr>
                <tr><td colspan='3'><hr class='hrDivisor'></td></tr>
                </thead>
                
                <tbody>";
                for ($i = 0; $i < count($colAutos); $i++){
                    echo '<tr>';
                    echo '<td>'.$colAutos[$i]['patente'].'</td>';
                    echo '<td>'.$colAutos[$i]['marca'].'</td>';
                    echo '<td>'.$colAutos[$i]['modelo'].'</td>';
                    echo '</tr>';
                    echo "<tr><td colspan='3'><hr class='hrDivisor'></td></tr>";
                }
                echo '</tbody>
                </table>';
            }else{
                echo '</tbody>
                </table>';
                echo '<h4>No hay autos registrados con el dni ingresado </h4>';
            }
        }else{
            echo '</tbody>
            </table>';
            echo '<h4>No se encontro ninguna persona con el dni ingresado. </h4>';
        }

        ?>
        <div id="contieneLinkVolver">
            <a href="../autosPersona.php">Volver</a>
        </div>
    </div>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>