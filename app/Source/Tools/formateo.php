<?php

namespace App\Source\Tools;


use Illuminate\Support\Facades\URL;

class formateo
{


    public static function formateoDatosDispositivos($datos)
    {
        return [
            'tienda' => $datos[0]['nombresistema'],
            'logo' => URL::to('/') . $datos[0]['logosistema']
        ];
    }

    public static function ordenarPropiedadesValores($data)
    {

        $lista = [];
        $ordenado = [];
        //  dd($data);
        $otvar = 0;
        for ($a = 0; $a < count($data); $a++) {
            $flag = true;
            if (count($lista) > 0) {
                for ($b = 0; $b < count($lista); $b++) {
                    if ($lista[$b] == $data[$a]['id']) {
                        $flag = false;
                    }
                }
            }
            if ($flag == true) {
                array_push($lista, $data[$a]['id']);
                array_push($ordenado, ['nombre' => $data[$a]['nombre'], 'valores' => $data[$a]['valor_propiedad'],]);
            }
        }
        return $ordenado;
    }
}
