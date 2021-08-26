<?php
//! C2 L49
namespace App\Http\Requests; 

use Illuminate\Foundation\Http\FormRequest;

class ColoniaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true; //! C2 L49
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomcol' => ['required', 'max:40'],
            //
        ];
    }
}
