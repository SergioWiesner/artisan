<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Productos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'imagenproducto' => '',
            'stock' => 'numeric',
            'valor' => 'required|numeric',
            'categoria' => 'required|numeric',
            'productopadre' => '',
        ];
    }
}
