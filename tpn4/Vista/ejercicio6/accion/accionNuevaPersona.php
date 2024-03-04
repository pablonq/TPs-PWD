<?php 
    $tituloPagina = "Ejercicio 6 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer6";
    $rutaEstructura = "../../";
    $correccionRuta = "2";
    
    include_once('../../estructura/encabezado.php');
    include_once('../../../configuracion.php');

    $datos = data_submitted();
    $objPersona = new AbmPersona();

    $param[0] = ["NroDni"=>$datos['NroDni']];

    $listaPersonas = $objPersona->buscar($param[0]);
 
    if (count($listaPersonas) == 1 ){
        $mensaje= "Error. El número de dni ya se encuentra registrado.";
    } else {
        if ($objPersona->alta($datos)){
            $mensaje = "Se ha ingresado la persona a la base de datos con éxito.";
        }else{
            $mensaje = "Error. Datos mal ingresados";
        }
    }
?>
    <div class="contenedorEnunciado">
        Ingrese los datos de una persona para cargarlos en la base de datos
    </div>

    <div class="contenedorCentrado">
        <h4><?php echo $mensaje ?> </h4>
        <div id="contieneLinkVolver">
            <a href="../../ejercicio5/listaPersonas.php">Ver lista de personas en la base da datos</a>
            </br>
            <a href="../../ejercicio7/nuevoAuto.php">Registrar un nuevo auto en la base de datos</a>
            </br>
            <a href="../nuevaPersona.php"> Volver </a>
        </div>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>