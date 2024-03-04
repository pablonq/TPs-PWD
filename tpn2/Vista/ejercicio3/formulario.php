<?php
$tituloPagina = "Ejercicio 3 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer3";

include_once('../estructura/encabezado.php');
?>
<!-- 
    tp2 ejercicio 3
-->

<div class="contenedorCentrado2">

    <script src="../estructura/js/verificacio_jquery.js"></script>

    <form action="formAccion.php" method="post" id="form">
        <div class="container d-flex justify-content-center">
            <div class="bg-secondary m-4  d-flex justify-content-center align-items-center" style="height: 300px; width: 300px;">
                <div class="bg-light position-relative " style="height: 270px; width: 270px;">
                    <div class="d-grid gap-2 col-10 mx-auto position-absolute top-50 start-50 translate-middle">
                        <div class="d-flex align-items.center">
                            <p class="h5 text-center">Member Login</p>
                            <button type="button" class="btn-close ml-3"></button>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username">
                            <label for="usuario" id="mensaje1"><i class="bi bi-person-fill"></i> Username</label>
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                            <label for="pass"><i class="bi bi-lock-fill"></i> Password</label>
                        </div>

                        <div id="formconsole" class="error"></div>
                        <!-- <button class="btn btn-primary " type="button" id="boton">Login</button>   -->
                        <input type="submit" value="Login" id="boton" class="btn btn-success btn-primar">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
include_once('../estructura/pie.php');
?>