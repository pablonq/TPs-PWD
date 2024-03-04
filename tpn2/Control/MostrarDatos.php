<?php

class MostrarDatos
{
    /**
     * Retorrna string anunciando una película
     * @return string
     */
    public function mensaje()
    {
        $mensaje = "<h1>La pelicula introducida es</h1>";
        return $mensaje;
    }

    /**
     * Recibe array con datos de una película, retorna cadena de string
     * con datos de la misma
     * @param array $datos
     * @return string
     */
    public function generarCartelera($datos)
    {
        $titulo = $datos['titulo'];
        $actores = $datos['actores'];
        $director = $datos['director'];
        $guion = $datos['guion'];
        $produccion = $datos['produccion'];
        $anio = $datos["anio"];
        $nacionalidad = $datos['nacionalidad'];
        $genero = $datos['genero'];
        $duracion = $datos['duracion'];
        $restriccion = $datos['edad'];
        $sinopsis = $datos['sinopsis'];

        $pelicula = "<span class='texto'>Título: </span><span class='descripcion'>" . $titulo . "</span></br>
        <span class='texto'>Actores: </span><span class='descripcion'>" . $actores . "</span></br>
        <span class='texto'>Director: </span><span class='descripcion'>" . $director . "</span></br>
        <span class='texto'>Guion: </span><span class='descripcion'>" . $guion . "</span></br>
        <span class='texto'>Produccion: </span><span class='descripcion'>" . $produccion . "['produccion']</span></br>
        <span class='texto'>Año: </span><span class='descripcion'>" . $anio . "</span></br>
        <span class='texto'>Nacionalidad: </span><span class='descripcion'>" . $nacionalidad . "</span></br>
        <span class='texto'>Genero: </span><span class='descripcion'>" . $genero . "</span></br>
        <span class='texto'>Duracion: </span><span class='descripcion'>" . $duracion . "</span></br>
        <span class='texto'>Restricciones de Edad: </span><span class='descripcion'>" . $restriccion . "</span></br>
        <span class='texto'>Sinopsis: </span><span class='descripcion'>" . $sinopsis . "</span></br>";

        return $pelicula;
    }
}
