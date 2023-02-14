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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|integer',

        ];
    }

    public function messages()
    { return [
        'name.required' => 'Введите имя пользователя.',
        'email.required' => 'Введите email пользователя.',
        'email.email' => 'Некорректный email.',
        'email.unique' => 'Такой пользователь уже существует.',
        'password.required' => 'Придумайте пароль пользователя.',
        'password.min' => 'Пароль должен содержать минимум 8 символов.',
        'role.required' => 'Выберите роль.',

    ];
    }
}
