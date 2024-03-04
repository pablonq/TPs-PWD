<html>

<head>

    <title><?php echo $tituloPagina ?></title>

    <link rel="stylesheet" type="text/css" href="../estructura/css/estilo_tp2.css">
    <script src="../estructura/js/funciones_tp2.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

    <script  src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="../estructura/js/verificacion_jquery.js"></script>
    <script src="../estructura/js/jquery_spanish.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body onload="actualizarCurrent(<?php echo $tp ?>, <?php echo $ejercicio ?>)">

    <!-- ____________________________________ CONTENEDOR CUERPO ________________________ -->
    <div id="contenedorCuerpo">

    <!-- ____________________________________ CONTENEDOR PÁGINA ________________________ -->
    <div id="contenedorPagina">

    <!-- ____________________________________ CONTENEDOR GENERAL _______________________________ -->
    <div id="contenedorGeneral">

    <!-- ____________________________________ BANNER ___________________________________________ -->
    <div id="banner">
        <div id="tituloMateria">Programación Web Dinámica</div>
        <div id="tituloGrupo">GRUPO 2: Entrega 01</div>
    </div>

    <!-- ____________________________________ CABEZAL __________________________________________ -->
    <div id="menuTrabajos">
        <input type="button" name="botonTP1" id="botonTP1" value="TP1" class="botonTrabajos" onclick="irATP1Ejercicio1();"><!--
        --><input type="button" name="botonTP2" id="botonTP2" value="TP2" class="botonTrabajos" onclick="irATP2Ejercicio1();"><!--
        --><input type="button" name="botonTP3" id="botonTP3" value="TP3" class="botonTrabajos" onclick="irATP3Ejercicio1();"><!--
        --><input type="button" name="botonTP4" id="botonTP4" value="TP4" class="botonTrabajos" onclick="irATP4Ejercicio1();">
    </div>

    <div id="menuEjercicios">
        <input type="button" name="botonEjer1" id="botonEjer1" value="Ejercicio 1" class="botonEjercicios" onclick="irATP2Ejercicio1();"><!--
        --><input type="button" name="botonEjer2" id="botonEjer2" value="Ejercicio 2" class="botonEjercicios" onclick="irATP2Ejercicio2();"><!--
        --><input type="button" name="botonEjer3" id="botonEjer3" value="Ejercicio 3" class="botonEjercicios" onclick="irATP2Ejercicio3();"><!--
        --><input type="button" name="botonEjer4" id="botonEjer4" value="Ejercicio 4" class="botonEjercicios" onclick="irATP2Ejercicio4();">
    </div>