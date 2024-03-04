<html>

<head>

    <title><?php echo $tituloPagina ?></title>

    <link rel="stylesheet" type="text/css" href="../estructura/css/estilo_tp2_ej2.css">
    <script src="../estructura/js/funciones_tp2_ej2.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

    <script  src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../estructura/js/jquery_spanish.js"></script>
    <script src="verificacion.js"></script>
    <script src="../estructura/js/funciones_tp2_eje2.js"></script>
    <script src="../estructura/js/verificacion_jquery.js"></script>
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body onload="actualizarCurrent(<?php echo $tp ?>, <?php echo $ejercicio ?>, <?php echo $tp2ej2Ejercicio ?>)">

    <!-- ________________________________________________ CONTENEDOR CUERPO ________________________ -->
    <div id="contenedorCuerpo">

    <!-- ____________________________________________ CONTENEDOR PÁGINA ________________________ -->
    <div id="contenedorPagina">

    <!-- ________________________________________ CONTENEDOR GENERAL _______________________ -->
    <div id="contenedorGeneral">

    <!-- ____________________________________ BANNER ___________________________________ -->
    <div id="banner">
        <div id="tituloMateria">Programación Web Dinámica</div>
        <div id="tituloGrupo">GRUPO 2: Entrega 01</div>
    </div>

    <!-- ____________________________________ CABEZAL __________________________________ -->
    <div id="menuTrabajos">
        <input type="button" name="botonTP1" id="botonTP1" value="TP1" class="botonTrabajos" onclick="irATP1Ejercicio1();"><!--
        --><input type="button" name="botonTP2" id="botonTP2" value="TP2" class="botonTrabajos" onclick="irATP2Ejercicio1();"><!--
        --><input type="button" name="botonTP3" id="botonTP3" value="TP3" class="botonTrabajos" onclick="irATP3Ejercicio1();"><!--
        --><input type="button" name="botonTP4" id="botonTP4" value="TP4" class="botonTrabajos" onclick="irATP4Ejercicio1();">
    </div>

    <div id="menuEjercicios">
        <input type="button" name="botonEjer1" id="botonEjer1" value="Ejercicio 1" class="botonEjercicios" onclick="irATP2Ejercicio1();"><!--
        --><input type="button" name="botonEjer2" id="botonEjer2" value="Ejercicio 2" class="botonEjercicios" onclick="irATP2EJ2Ejercicio1();"><!--
        --><input type="button" name="botonEjer3" id="botonEjer3" value="Ejercicio 3" class="botonEjercicios" onclick="irATP2Ejercicio3();"><!--
        --><input type="button" name="botonEjer4" id="botonEjer4" value="Ejercicio 4" class="botonEjercicios" onclick="irATP2Ejercicio4();">
    </div>

    <div id="menuEjerciciosTP2EJ2">
        <input type="button" name="TP2EJ2botonEjer1" id="TP2EJ2botonEjer1" value="Ejer. 2.1" class="botonEjercicios" onclick="irATP2EJ2Ejercicio1();"><!--
        --><input type="button" name="TP2EJ2botonEjer2" id="TP2EJ2botonEjer2" value="Ejer. 2.2" class="botonEjercicios" onclick="irATP2EJ2Ejercicio2();"><!--
        --><input type="button" name="TP2EJ2botonEjer3" id="TP2EJ2botonEjer3" value="Ejer. 2.3" class="botonEjercicios" onclick="irATP2EJ2Ejercicio3();"><!--
        --><input type="button" name="TP2EJ2botonEjer4" id="TP2EJ2botonEjer4" value="Ejer. 2.4" class="botonEjercicios" onclick="irATP2EJ2Ejercicio4();"><!--
        --><input type="button" name="TP2EJ2botonEjer5" id="TP2EJ2botonEjer5" value="Ejer. 2.5" class="botonEjercicios" onclick="irATP2EJ2Ejercicio5();"><!--
        --><input type="button" name="TP2EJ2botonEjer6" id="TP2EJ2botonEjer6" value="Ejer. 2.6" class="botonEjercicios" onclick="irATP2EJ2Ejercicio6();"><!--
        --><input type="button" name="TP2EJ2botonEjer7" id="TP2EJ2botonEjer7" value="Ejer. 2.7" class="botonEjercicios" onclick="irATP2EJ2Ejercicio7();"><!--
        --><input type="button" name="TP2EJ2botonEjer8" id="TP2EJ2botonEjer8" value="Ejer. 2.8" class="botonEjercicios" onclick="irATP2EJ2Ejercicio8();">
    </div>