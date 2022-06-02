<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm() {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        if(Auth::attempt($request->validated())) {
            return redirect('/');
        }

        return view('auth.login', ['valid_credentials' => false]);
    }

    public function registerForm() {
        return view('auth.register');
    }

    public function register(RegisterRequest $registerRequest) {
        $data = $registerRequest->validated();

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        event(new Registered($user));

        return redirect('/login');
    }
}
