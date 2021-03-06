<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategosRequest extends FormRequest
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
            'catego' => ['required', 'max:08'],  //! C18 Faltaba esta linea
            'descripcion' => ['required', 'max:60'],
            'tarifa' => ['required', 'numeric',  'min:1'],
            'kilos' => ['required', 'integer', 'min:1'],

            //
        ];
    }
}
