<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            //
            'name'=>'required|max:255|string',
            'email'=>'required|max:255|email|unique:users,email',
            'password'=>'required|max:255|confirmed',
        ];
    }
}
