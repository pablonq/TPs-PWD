<?php 
    $tituloPagina = "Ejercicio 9 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer9";
    $rutaEstructura = "../../";
    $correccionRuta = "2";
    
    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");
    
    $datos= data_submitted();
    $objPersona = new AbmPersona();
    $soloDni['NroDni'] = $datos['NroDni'];
    
    $listaPersonas = $objPersona->buscar($soloDni);
    if (count($listaPersonas) == 1 ){
        if ($objPersona-> modificacion($datos)){
            $mensaje = "Datos modificados correctamente";
        }else{
            $mensaje= "No se modificaron datos.";
        }
    
    }else{
        $mensaje = "El DNI ingresado no existe en la base de datos";
    }
?>
    <div class="contenedorEnunciado">
        Resultado de la operación
    </div>

    <div class="contenedorCentrado">
    <div class="textoCentrado"><strong>ACTUALIZACION DE DATOS</strong></div>
        <h4><?php echo $mensaje ?> </h4>
        </br>
        <div class="contieneLink">
            <a href="../../ejercicio5/listaPersonas.php">Lista de personas cargadas</a><br>
            <a href="../buscarPersona.php">Buscar persona</a>
        </div>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>