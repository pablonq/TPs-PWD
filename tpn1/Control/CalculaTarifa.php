<?php
class CalculaTarifa
{
    //CONSTRUCTOR
    public function __construct()
    {
    }

    /**
     * Recibe array con datos, retorna monto de tarifa
     * @param array $datos
     * @return mixed
     */
    public function calcularTarifa($datos)
    {
        $edad = $datos['edad'];
        $estudios = $datos['estudia'];

        $tarifa = 300;
        if ($estudios == "si" || $edad < 12) {
            $tarifa = 160;
        } elseif ($estudios == "si" && $edad >= 12) {
            $tarifa = 180;
        }
        return $tarifa;
    }
}
