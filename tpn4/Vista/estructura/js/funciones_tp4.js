
/**
 * Lee elementos que corresponden al ejercicio en el que se está actualmente y los remarca en el navegador
 * 
 */
function actualizarCurrent(tp, ejercicio) {

    tp.classList.add("botonActual");
    ejercicio.classList.add("botonActual");
}

/*/=======================================================================================\*\
||                                    Links del navegador                                  ||
\*\=======================================================================================/*/

function indicaRuta(correccionRuta){

    switch(correccionRuta){
        case 1:
            ruta = "../";
            break;
        case 2:
            ruta = "../../";
            break;
        default:
            ruta = "Error";
            break;
    }
    return ruta;
}

function irATP4Ejercicio3(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"ejercicio3/verAutos.php";
}
function irATP4Ejercicio4(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"ejercicio4/buscarAuto.php";
}
function irATP4Ejercicio5(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"ejercicio5/listaPersonas.php";
}
function irATP4Ejercicio6(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"ejercicio6/nuevaPersona.php";
}
function irATP4Ejercicio7(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"ejercicio7/nuevoAuto.php";
}
function irATP4Ejercicio8(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"ejercicio8/cambioDuenio.php";
}
function irATP4Ejercicio9(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"ejercicio9/buscarPersona.php";
}

/*/=======================================================================================/*/

function irATP1Ejercicio1(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"../../tpn1/Vista/ejercicio1/formulario.php";
}

function irATP2Ejercicio1(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"../../tpn2/Vista/ejercicio1/ejercicio1.php";
}

function irATP3Ejercicio1(correccionRuta) {
    ruta = indicaRuta(correccionRuta);
    window.location.href = ruta+"../../tpn3/Vista/ejercicio1/formulario.php";
}