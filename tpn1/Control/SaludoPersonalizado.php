<?php
class SaludoPersonalizado
{
    //CONSTRUCTOR
    public function __construct()
    {
    }

    /**
     * Recibe array con datos personales, retorna string con saludo
     * @param string $datos
     * @return string
     */
    public function crearSaludo($datos)
    {
        $nombre = $datos['nombreForm'];
        $apellido = $datos['apellidoForm'];
        $edad = $datos['edadForm'];
        $direccion = $datos['direccionForm'];

        $respuesta = "Hola, yo soy " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $direccion;

        return $respuesta;
    }
}
