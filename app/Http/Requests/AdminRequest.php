<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Pole name jest wymagane',
            'name.string'=>'Pole name jest błędne',
            'email.required'=>'Pole email jest wymagane',
            'email.email'=>'Pole email ma zły format',
            'email.unique'=>'Podany mail istnieje',
            'email.string'=>'Pole email ma zły format',

        ];
    }
}
