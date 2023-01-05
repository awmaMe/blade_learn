<?php

namespace App\Http\Requests\Master;

use App\Trait\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    use BaseRequest;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required_without:username|unique:users,email',
            'username' => 'required_without:email|unique:users,username',
            'password' => 'required|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'password.confirmed' => 'Confirm password does not match',
        ];
    }
}
