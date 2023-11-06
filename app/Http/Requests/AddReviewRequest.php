<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddReviewRequest extends FormRequest
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
            'date' => 'required|min:1 |max: 20',
            'text' => 'required|min:1 |max: 1000',

        ];
    }
    public function messages(){
        return[
            'date.required'=>'Поле "Дата" не заполнил. Не халтурь',
            'text.required'=>'Поле "Текст" не заполнил. Не халтурь',
        ];

    }
}
