<?php 
    $tituloPagina = "Ejercicio 5 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer5";
    $rutaEstructura = "../";
    $correccionRuta = "1";
    
    include_once('../estructura/encabezado.php');
    include_once('../../configuracion.php');

    $controlPersona = new AbmPersona();
    $colInfoPersonas = $controlPersona->buscarColInfo([]);
?>

    <div class="contenedorEnunciado">
        Lista de personas cargadas en la base de datos
    </div>

    <div class="contenedorCentrado excedeMargenLateral">
    <div class="contieneLink"><h6><a href="autosPersona.php">Listar autos registrados por dni</a></h6></div>
    <div class="textoCentrado contenedorSeparado"><h4><strong>Lista de personas</strong></h4></div>
    <hr class='hrDivisor'>
    <?php
    if(count($colInfoPersonas)>0){
        echo '<table>
        <thead >
            <tr>  
              <th><strong>DNI</strong></th>
              <th><strong>Apellido</strong></th>
              <th><strong>Nombre</strong></th>
              <th><strong>Fecha de Nacimiento</strong></th>
              <th><strong>Telefono</strong></th>
              <th><strong>Domicilio</strong></th>
            </tr>
        </thead>
        <tbody>';
        echo "<tr><td colspan='6'><hr class='hrDivisor'></td></tr>";
        for ($i = 0; $i < count($colInfoPersonas); $i++){
            echo '<tr>';
            echo '<td>'.$colInfoPersonas[$i]['nroDni'].'</td>';
            echo '<td>'.$colInfoPersonas[$i]['apellido'].'</td>';
            echo '<td>'.$colInfoPersonas[$i]['nombre'].'</td>';
            echo '<td>'.$colInfoPersonas[$i]['fechaNac'].'</td>';
            echo '<td>'.$colInfoPersonas[$i]['telefono'].'</td>';
            echo '<td>'.$colInfoPersonas[$i]['domicilio'].'</td>';
            echo '</tr>'; 
            echo "<tr><td colspan='6'><hr class='hrDivisor'></td></tr>";
        }
        echo'</tbody>
        </table>' ;   
    }else{
        echo '<h4>No se hay personas cargadas en la base de datos.</h4>';  
    }
?>
 <script src="../estructura/js/validarCamposVacios.js"></script>

 </div>

<?php
    include_once('../estructura/pie.php');
?>