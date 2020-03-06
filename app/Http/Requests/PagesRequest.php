<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagesRequest extends FormRequest
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
            'przedmiot'=>'required|max:255',
            'poziom'=>'required|max:255',
            'lokalizacja'=>'required|max:255',
            'tel'=>'required|regex:/[0-9]{9}/|max:11',
            'Imie'=>'required|max:255',
            'title'=>'required|max:255',
            'content'=>'required|max:255',

        ];
    }

    public function messages()
    {
        return [
            'przedmiot.required'=>'Pole przedmiot jest wymagane',
            'poziom.required'=>'Pole poziom jest wymagane',
            'lokalizacja.required'=>'Pole miasto jest wymagane',
            'lokalizacja.regex:'=>'Pole miasto jest nieprawidłowe',
            'tel.required'=>'Pole kontakt jest wymagane',
            'tel.regex'=>'Pole kontakt jest nieprawidłowe',
            'Imie.required'=>'Pole osoba kontaktowa jest wymagane',
            'title.required'=>'Pole tytuł jest wymagane',
            'content.required'=>'Pole treść jest wymagane',


        ];
    }
}
