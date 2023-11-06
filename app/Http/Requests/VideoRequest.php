<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class VideoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'description' => 'required|min:1 |max: 1000',
            'link' => 'required|min:1 |max: 1000',

        ];
    }
    public function messages(){
        return[
            'description.required'=>'Поле "Описание" не заполнил. Не халтурь',
            'link.required'=>'Поле Link" не заполнил. Не халтурь',
        ];

    }
}
