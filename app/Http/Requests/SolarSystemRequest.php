<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolarSystemRequest extends FormRequest
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
            'name' => 'required|min:2|max:100|regex:/^[a-z 0-9ãõáéíóúàèìòùäëïöüâêîôûÃÕÉÉÍÓÚÀÈÌÒÙÄËÏÖÜÂÊÎÔÛçÇ-]+$/i',
            'dimension' => 'required|numeric|min:1',
            'number_of_planets' => 'required|numeric|min:1',
            'main_star' => 'required|min:2|max:100|regex:/^[a-z 0-9ãõáéíóúàèìòùäëïöüâêîôûÃÕÉÉÍÓÚÀÈÌÒÙÄËÏÖÜÂÊÎÔÛçÇ-]+$/i',
        ];
    }
}
