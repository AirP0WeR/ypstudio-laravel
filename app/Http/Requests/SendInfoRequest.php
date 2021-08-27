<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendInfoRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required | min:15 | max:500'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле email является обязательным',
            'message.required' => 'Поле сообщение является обязательным',
            'email.email' => 'Поле email заполенно не верно'
        ];
    }
}
