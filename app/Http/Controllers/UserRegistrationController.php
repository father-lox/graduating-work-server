<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserRegistrationController extends Controller
{
    public function index() {
        return view('registration');
    }

    public function register(Request $request) {

        $userRegistrationFields = $request->validate([
            "name" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed"]
        ]);

        $newUser = User::create([
            "name" => $userRegistrationFields["name"],
            "email" => $userRegistrationFields["email"],
            "password" => bcrypt($userRegistrationFields["password"])
        ]);

        if ($newUser) {
            auth("web")->login($newUser);
        }

        return redirect(route('publications'));
    }
}
