<?php

class Password
{
    /**
     * Recibe array, verifica si el usuario y contraseña coinciden con
     * una cuenta real
     */
    public function verificarDatos($datos)
    {
        $usuarioIngresado = $datos["usuario"];
        $passIngresada = $datos["pass"];

        $usuarios = [];
        $usuarios[0] = ["Juan", "Perez"];
        $usuarios[1] = ["Juan5", "12345"];
        $usuarios[2] = ["1234", "1234"];

        $i = 0;
        $j = 0;

        $cuenta = false;
        $contraIncorrecta = false;

        //Recorro nombres de usuario para buscar coincidencias
        while (($i < count($usuarios) && !$cuenta && !$contraIncorrecta)) {
            if ($usuarios[$i][0] == $usuarioIngresado) {
                if($usuarios[$i][1] == $passIngresada){
                    $cuenta = true;
                } else {
                    $contraIncorrecta = true;
                }
            }
            $i++;
        }

        //Genero mensaje dependiendo si los datos corresponden o no a un usuario real
        if ($cuenta) {
            $mensaje = "Bienvenido!";
        } else {
            $mensaje = "Contraseña/usuario inválidos.";
        }

        return $mensaje;
    }
}
