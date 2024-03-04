<html>

<head>

    <title><?php echo $tituloPagina ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo $rutaEstructura ?>estructura/css/estilo_tp4.css">
    <script src="<?php echo $rutaEstructura ?>estructura/js/funciones_tp4.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body onload="actualizarCurrent(<?php echo $tp ?>, <?php echo $ejercicio ?>)">

    <!-- ____________________________________ CONTENEDOR CUERPO ________________________ -->
    <div id="contenedorCuerpo">

    <!-- ____________________________________ CONTENEDOR PÁGINA ________________________ -->
    <div id="contenedorPagina">

    <!-- ____________________________________ CONTENEDOR GENERAL _______________________ -->
    <div id="contenedorGeneral">

    <!-- ____________________________________ BANNER ___________________________________ -->
    <div id="banner">
        <div id="tituloMateria">Programación Web Dinámica</div>
        <div id="tituloGrupo">GRUPO 2: Entrega 02</div>
        <div id="version">version D18.0</div>
    </div>

    <!-- ____________________________________ CABEZAL __________________________________ -->
    <div id="menuTrabajos">
        <input type="button" name="botonTP1" id="botonTP1" value="TP1" class="botonTrabajos" onclick="irATP1Ejercicio1(<?php echo $correccionRuta ?>);"><!--
        --><input type="button" name="botonTP2" id="botonTP2" value="TP2" class="botonTrabajos" onclick="irATP2Ejercicio1(<?php echo $correccionRuta ?>);"><!--
        --><input type="button" name="botonTP3" id="botonTP3" value="TP3" class="botonTrabajos" onclick="irATP3Ejercicio1(<?php echo $correccionRuta ?>);"><!--
        --><input type="button" name="botonTP4" id="botonTP4" value="TP4" class="botonTrabajos" onclick="irATP4Ejercicio3(<?php echo $correccionRuta ?>);">
    </div>

    <div id="menuEjercicios">
        <div id="botonEjer3" class="botonEjercicios" onclick="irATP4Ejercicio3(<?php echo $correccionRuta ?>);"><a href=#>Ver<br>Autos</a></div><!--
        --><div id="botonEjer4" class="botonEjercicios" onclick="irATP4Ejercicio4(<?php echo $correccionRuta ?>);"><a href=#>Buscar<br>Auto</a></div><!--
        --><div id="botonEjer5" class="botonEjercicios" onclick="irATP4Ejercicio5(<?php echo $correccionRuta ?>);"><a href=#>Ver<br>Personas</a></div><!--
        --><div id="botonEjer6" class="botonEjercicios" onclick="irATP4Ejercicio6(<?php echo $correccionRuta ?>);"><a href=#>Cargar<br>Persona</a></div><!--
        --><div id="botonEjer7" class="botonEjercicios" onclick="irATP4Ejercicio7(<?php echo $correccionRuta ?>);"><a href=#>Cargar<br>Auto</a></div><!--
        --><div id="botonEjer8" class="botonEjercicios" onclick="irATP4Ejercicio8(<?php echo $correccionRuta ?>);"><a href=#>Cambiar<br>Dueño</a></div><!--
        --><div id="botonEjer9" class="botonEjercicios" onclick="irATP4Ejercicio9(<?php echo $correccionRuta ?>);"><a href=#>Buscar<br>Persona</a></div>
    </div>