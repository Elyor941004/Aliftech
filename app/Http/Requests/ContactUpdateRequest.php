<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
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
            'name'=>'required|distinct',
            'phone.*'=>'required|distinct',
            'email.*'=>'required|distinct',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Введите ваше имя',
            'phone.0.required'=>'1 - Введите ваше телефон',
            'phone.1.required'=>'2 - Введите ваше телефон',
            'phone.2.required'=>'3 - Введите ваше телефон',
            'email.0.required'=>'1 - Введите ваше емаил',
            'email.1.required'=>'2 - Введите ваше емаил',
            'email.2.required'=>'3 - Введите ваше емаил',
            'phone.0.distinct'=>'1 - Введите другой введенный номер телефона',
            'phone.1.distinct'=>'2 - Введите другой введенный номер телефона',
            'phone.2.distinct'=>'3 - Введите другой введенный номер телефона',
            'email.0.distinct'=>'1 - Введите другую введенную учетную запись электронной почты',
            'email.1.distinct'=>'2 - Введите другую введенную учетную запись электронной почты',
            'email.3.distinct'=>'3 - Введите другую введенную учетную запись электронной почты',
        ];
    }
}
