<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanetRequest extends FormRequest
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
            'number_of_moons' => 'required|numeric|min:1',
            'light_years_from_the_main_star' => 'required|numeric',
        ];
    }
}
