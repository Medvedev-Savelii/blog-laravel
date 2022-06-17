<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
           'name' =>'required|string',
           'email' =>'required|string|email|unique:users',
           'password' =>'required|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поле необходимо для заполнения',
            'name.string' => 'Имя должно соответствовать строчному типу',
            'email.required' => 'Это поле необходимо для заполнения',
            'email.string' => 'Имя должно соответствовать строчному типу',
            'email.email' => 'Ваша почта должно соответствовать формату mail@some.domain',
            'email.unique' => 'Пользователь с таким email уже сушествует',
            'password.required' => 'Это поле необходимо для заполнения',
            'password.string' => 'Пороль должно соответствовать строчному типу',
        ];
    }
}
