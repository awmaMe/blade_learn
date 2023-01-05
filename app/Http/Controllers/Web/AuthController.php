<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Master\UserRequest;
use App\Models\Master\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('register');
    }

    public function sign_up(UserRequest $request)
    {
        $user = User::create($request->validated());
        auth()->login($user);

        return redirect()->route('user.profile');
    }

    public function login(LoginRequest $request)
    {
        $user = User::query()
            ->where('email', $request->identifier)->orWhere('username', $request->identifier)
            ->first();

        if (!$user) {
            session()->flash('flash_message', 'Invalid credentials');
            return back();
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('home');
    }
}
