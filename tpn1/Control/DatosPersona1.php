<?php
class DatosPersona1
{
    /**
     * Recibe array con datos, retorna cadena de string con ellos
     * @param array $datos
     * @return string
     */
    public function datosPersonales($datos)
    {
        $nombre = $datos['nombreForm'];
        $apellido = $datos['apellidoForm'];
        $edad = $datos['edadForm'];
        $direccion = $datos['direccionForm'];

        if ($edad >= 18) {
            $textoEdad = "</br>Es mayor de edad";
        } else {
            $textoEdad = "</br>Es menor de edad";
        }

        $mensaje = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Dirección: " . $direccion .
            "</br>" . $textoEdad . "</br>";

        return $mensaje;
    }
}
