<?php

namespace App\Source\Tools;


class Basics
{

    public static function collectionToArray($data)
    {
        if (count($data) > 0) {
            return $data->toArray();
        }
        return [];
    }

    public function Subirimagenes($imagen)
    {
        $path = $request->photo->store($imagen);
    }
}
