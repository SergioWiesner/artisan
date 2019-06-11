<?php

namespace App\Source\Tools;

use Carbon\Carbon;
use App\Source\Tools\Mobile_Detect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class Basics
{
    public static function collectionToArray($data)
    {
        if (count($data) > 0) {
            return $data->toArray();
        }
        return [];
    }

    public static function agregarLog($nombre = null, $descripcion = null, $ubicacion = null)
    {
        $fecha = Carbon::now();
        DB::table('logs')->insert([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'ubicacion' => $ubicacion,
            'created_at' => $fecha->toDateTimeString(),
            'updated_at' => $fecha->toDateTimeString()
        ]);
    }

    public static function subirImagenPrincipalCabeceras($contenido, $nombre, $oldimg = null, $nombreimg)
    {
        if (!is_null($oldimg)) {
            Storage::disk('local')->delete($oldimg);
        }
        $img255 = Image::make($contenido)->widen(255)->heighten(255)->resizeCanvas(255, 255, 'center', false, 'fff');
        $img800 = Image::make($contenido)->widen(800)->heighten(800)->resizeCanvas(800, 800, 'center', false, 'fff');
        $nombre255 = $nombre . sha1($nombreimg) . "x255.webp";
        $nombrehover = $nombre . sha1($nombreimg) . "x255hover.webp";
        $nombre800 = $nombre . sha1($nombreimg) . "x800.webp";
        Storage::disk('local')->put($nombre255, $img255->stream('webp'));
        $img255->mask(public_path('/img/marca.png'));
        Storage::disk('local')->put($nombrehover, $img255->stream('webp'));
        Storage::disk('local')->put($nombre800, $img800->stream('webp'));
        return [
            'min' => Storage::disk('local')->url($nombre255),
            'hover' => Storage::disk('local')->url($nombrehover),
            'big' => Storage::disk('local')->url($nombre800)
        ];
    }

    public static function Subirimagenes($contenido, $nombre, $medidas = [])
    {
        $imagen = Image::make($contenido)->widen(500);
        $nombreruta = $nombre . sha1($nombre) . ".webp";
        Storage::disk('local')->put($nombreruta, $imagen->stream('webp'));
        return Storage::disk('local')->url($nombreruta);
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

    public static function isMobil()
    {
        $detect = new Mobile_Detect();

        // Any mobile device (phones or tablets).
        if ($detect->isMobile()) {
            return true;
        }

        // Any tablet device.
        if ($detect->isTablet()) {
            return true;
        }

        // Exclude tablets.
        if ($detect->isMobile() && !$detect->isTablet()) {
            return true;
        }

        // Check for a specific platform with the help of the magic methods:
        if ($detect->isiOS()) {
            return true;
        }

        if ($detect->isAndroidOS()) {
            return true;
        }


        return false;
        // Alternative method is() for checking specific properties.
        // WARNING: this method is in BETA, some keyword properties will change in the future.
        $detect->is('Chrome');
        $detect->is('iOS');
        $detect->is('UC Browser');


        // Batch mode using setUserAgent():
        $userAgents = array(
            'Mozilla/5.0 (Linux; Android 4.0.4; Desire HD Build/IMM76D) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19',
            'BlackBerry7100i/4.1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/103',
            // [...]
        );
        foreach ($userAgents as $userAgent) {

            $detect->setUserAgent($userAgent);
            $isMobile = $detect->isMobile();
            $isTablet = $detect->isTablet();
            // Use the force however you want.

        }

        // Get the version() of components.
        // WARNING: this method is in BETA, some keyword properties will change in the future.
        $detect->version('iPad'); // 4.3 (float)
        $detect->version('iPhone'); // 3.1 (float)
        $detect->version('Android'); // 2.1 (float)
        $detect->version('Opera Mini'); // 5.0 (float)
    }
}
