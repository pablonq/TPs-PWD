<?php
class DatosPersona3
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

        //Verifico si el array con deportes no está vacío
        if (isset($datos['deporte'])) {
            $colDeportes = $datos['deporte'];
            $cadena = implode(", ", $colDeportes);
            $textoDeportes = "</br>Practica los siguientes deportes: " . $cadena;
        } else {
            $textoDeportes = "</br>No practica ningún deporte. ";
        }

        $mensaje = "Nombre: " . $nombre . "</br>Apellido: " . $apellido . "</br>Edad: " . $edad . "</br>Dirección: " . $direccion .
            "</br>Estudios: " . $estudios . "</br>Sexo: " . $sexo . "</br>" . $textoEdad . "</br>" . $textoDeportes;

        return $mensaje;
    }
}
