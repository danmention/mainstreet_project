<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $payload = $request->only('email', 'password');

        if (auth('admin')->attempt($payload)) {
            $response = $this->apiRequest()->login($payload);
            if (!$response) {
                return redirect('/logout')->withInput($request->all());
            }

            if (!$response->success) {
                return redirect('/logout');
            }

            $token = $response->data->token;
            $user_data = $response->data->user;

            if (empty($token)) {
                return redirect()->route('auth.login-page')
                    ->with('error', 'Upstream Server Error');
            }

            session()->put('api_token', $token);
            session()->put('api_user', $user_data);
            return redirect()->intended();

        } else {
            // validation not successful, send back to form
            return redirect()->route('auth.login-page')
                ->withErrors('Email or Password not correct');
        }

    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegistration(RegisterRequest $request)
    {
        $payload = $request->all();
        $response = $this->apiRequest()->register($payload);
        if (!$response || !$response->success) {
            return redirect()->back();
        }

        return $response;

    }

    public function logout()
    {
        auth('admin')->logout();
        auth()->logout();
        session()->forget('api_token');

        return redirect('/');
    }
}
