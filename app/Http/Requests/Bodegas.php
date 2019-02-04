<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Bodegas extends FormRequest
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
            'referencia' => 'required|string',
            'nombre' => 'required|string',
            'descripcion' => 'required|string'
        ];
    }
}
