<?php

namespace App\Source\Tools;

use Illuminate\Support\Facades\Storage;

class Basics
{


    public static function collectionToArray($data)
    {
        if (count($data) > 0) {
            return $data->toArray();
        }
        return [];
    }


    public static function Subirimagenes($contenido, $nombre)
    {
        $ruta = Storage::disk('local')->put($nombre, $contenido);
        return str_replace("public", "/storage", $ruta);
    }

    public static function determinarRutaimg($datos, $ubicacion)
    {
        if (isset($datos['rutaimg']) || isset($datos['rutaimagenold'])) {
            if (isset($datos['rutaimg'])) {
                $ruta = Basics::Subirimagenes($datos['rutaimg'], $ubicacion);
                $datos['rutaimg'] = $ruta;
            } else {
                $datos['rutaimg'] = $datos['rutaimagenold'];
            }
        } else {
            $datos['rutaimg'] = " ";
        }

        return $datos;
    }

    public static function obtenerReferencia($dato)
    {

        $rf = substr($dato['nombre'], 0, 3);
        if (isset($dato['propiedades']['valorpropiedad'])) {
            for ($a = 0; $a < count($dato['propiedades']['valorpropiedad']); $a++) {
                $rf .= substr($dato['propiedades']['valorpropiedad'][$a], 0, 2);
            }
        }

        return $rf;
    }

    public static function sanear_string($string)
    {

        $string = trim($string);

        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );

        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );

        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );

        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );

        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );

        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );

        //Esta parte se encarga de eliminar cualquier caracter extraño
        $string = str_replace(
            array('"\"', "¨", "º", " - ", "~",
                "#", "@", "|", "!", '"',
                "· ", "$", " % ", " & ", " / ",
                "(", ")", " ? ", "'", "¡",
                "¿", "[", "^", "<code>", "]",
                "+", "}", "{", "¨", "´",
                ">", "< ", ";", ",", ":",
                ".", " "),
            '',
            $string
        );


        return $string;
    }
}
