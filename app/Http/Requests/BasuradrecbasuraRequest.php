<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasuradrecbasuraRequest extends FormRequest
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

            'cuenta' => ['required', 'max:8'],
            'giro' => ['required'],
            'subgiro' => ['required'],
            'nombre ' => ['required', 'max:40'],
            'direccion' => ['required', 'max:40'],
            'nomciudad' => ['required', 'max:30'],
            'nomcomer' => ['required', 'max:40'],
            'ubicacion' => ['required', 'max:40'],
            'colonia' => ['required'],
            'finicio' => ['required', 'max:8'],
            'numper' => ['required', 'max:10'],
            'fperm' => ['required', 'max:8'],
            'fbaja' => ['required', 'max:8'],
            'fnotifica' => ['required', 'max:8'],
            'gestor' => ['required'],
            'expcat' => ['required', 'max:8'],
            'ctaant' => ['required', 'max:8'],
            'freq' => ['required', 'max:8'],
            'cvereq' => ['required'],
            'fembargo' => ['required', 'max:8'],
            'rfc' => ['required', 'max:20'],
            'telpart' => ['required', 'max:14'],
            'telneg' => ['required', 'max:14'],
            'grupo' => ['required'],
            'tipo' => ['required'],

        ];
    }
}
