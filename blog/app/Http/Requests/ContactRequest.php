<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//!!!false, если нужно, чтобы человек мог отправлять данные, только если он зарегистрирован!!!
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле email является обязательным',
            'email.email' => 'Поля email должно быть заполнено корректно',
            'message.required' => 'Поле сообщение является обязательным'
        ];
    }
}
