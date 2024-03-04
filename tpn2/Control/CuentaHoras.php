<?php
class CuentaHoras
{
    //CONSTRUCTOR
    public function __construct()
    {
    }

    /**
     * Recibe arreglo con horas, retorna la suma de todas ellas
     * @param array $datos
     * @return string
     */
    public function sumarHoras($datos)
    {
        $lunes = $datos['hsLunes'];
        $martes = $datos['hsMartes'];
        $miercoles = $datos['hsMiercoles'];
        $jueves = $datos['hsJueves'];
        $viernes = $datos['hsViernes'];

        $total = (float)$lunes + (float)$martes + (float)$miercoles + (float)$jueves + (float)$viernes;

        $mensaje = "Cantidad total de horas en la cursada de Programación Web: " . $total;

        return $mensaje;
    }
}
