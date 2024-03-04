<?php
class DatosPersona2
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
        $estudios = $datos['estudios'];
        $sexo = $datos['sexoForm'];

        if ($edad >= 18) {
            $textoEdad = "</br>Es mayor de edad";
        } else {
            $textoEdad = "</br>Es menor de edad";
        }

        $mensaje = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Dirección: " . $direccion .
            "</br>Estudios: " . $estudios . "</br>Sexo: " . $sexo . "</br>" . $textoEdad . "</br>";

        return $mensaje;
    }
}
