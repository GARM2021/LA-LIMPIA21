<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecargosRequest extends FormRequest
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
            'pctajerec' => ['required', 'min:1'],
            'pctajerec2' => ['required', 'min:1'],
                ];
    }
}
