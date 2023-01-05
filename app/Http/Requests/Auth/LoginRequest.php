<?php

namespace App\Http\Requests\Auth;

use App\Trait\BaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    use BaseRequest;

    public function rules()
    {
        return [
            'identifier' => 'required',
            'password' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'identifier' => 'email/phone'
        ];
    }
}
