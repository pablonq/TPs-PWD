<?php
class PositividadNumero
{

    //CONSTRUCTOR
    public function __construct()
    {
    }

    /**
     * Recibe arreglo con un número, retorna si es positivo, negativo o igual a 0
     * @param array $dato
     * @return string
     */
    public function clasificarNumero($dato)
    {
        $numero = $dato['numero'];

        switch ($numero) {
            case $numero > 0:
                $tipoNumero = "El número es positivo<br>";
                break;
            case $numero < 0:
                $tipoNumero = "El número es negativo<br>";
                break;
            case $numero == 0:
                $tipoNumero = "El número es igual a 0<br>";
        }
        return $tipoNumero;
    }
}
