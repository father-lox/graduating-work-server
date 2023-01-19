<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function index(): string
    {
        return view('login');
    }

    public function login(Request $request) {
        $userPassport = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);


        if (auth("web")->attempt($userPassport)) {
            return redirect(route('publications'));
        }

        return redirect(route('login'))->withErrors(['login' => 'Email or password is invalid']);
    }

    public function logout() {
        auth("web")->logout();
        return redirect(route('home'));
    }
}
