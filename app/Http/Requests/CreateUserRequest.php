<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Auth::...
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:100|regex:/^[a-z 0-9ãõáéíóúàèìòùäëïöüâêîôûÃÕÉÉÍÓÚÀÈÌÒÙÄËÏÖÜÂÊÎÔÛçÇ-]+$/i',
            'email' => 'required|email|unique:users|max:100',
            'password' => 'required|min:5|max:15|confirmed',
            'password_confirmation' => 'required|min:5|max:15',
        ];
    }
}
