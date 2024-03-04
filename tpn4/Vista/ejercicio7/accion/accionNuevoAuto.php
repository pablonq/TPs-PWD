<?php 
    $tituloPagina = "Ejercicio 7 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer7";
    $rutaEstructura = "../../";
    $correccionRuta = "2";
    
    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");

    $datos = data_submitted();
    //verEstructura($datos);
    $resp = false;
    $objAuto = new AbmAuto();
    $objPersona= new AbmPersona();
    //ver si el dni ingresado existe
    $dniDuenio[0]=["NroDni" => $datos["DniDuenio"]];
    $buscarDuenio=$objPersona->buscar($dniDuenio[0]);
    //verEstructura($buscarDuenio);
    $patente[0]=["Patente" => $datos["Patente"]];
    $autoDuplicado=$objAuto->buscar($patente[0]);
    if($buscarDuenio!=null and $autoDuplicado==null){
        if($objAuto->alta($datos)){
        $resp =true;
        $mensaje = "<div class='textoCentrado'>Auto cargado con éxito!</div>";
        }
    }else{

        if(!$resp){
            $mensaje = "<div class='textoCentrado'> No se pudo concretar la operación.</div><br>";
        }

        if($buscarDuenio==null){
            $mensaje .= "El dni ingresado no se encuentra en la base de datos.<br>";
        }

        if($autoDuplicado!=null){
            $mensaje .= " El Vehiculo ya existe en la Base de Datos<br>";
        }
    }

?>
    <div class="contenedorEnunciado">
        Ingrese los datos de un auto para cargarlos en la base de datos
    </div>

    <div class="contenedorCentrado">
        <?php echo $mensaje ?> <br>
        <div class="contieneLink">
            <a href='../../ejercicio6/nuevaPersona.php'>Haga click aquí para cargar una nueva persona</a><br>
            <a href='../../ejercicio5/listaPersonas.php'>Ver lista de personas cargadas</a>
        </div>
        <div id="contieneLinkVolver">
            <a href="../nuevoAuto.php">Volver</a>
        </div>

    </div>

<?php
    include_once('../../estructura/pie.php');
?>