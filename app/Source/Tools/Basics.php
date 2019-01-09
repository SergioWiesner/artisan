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
}
