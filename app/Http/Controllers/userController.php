<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class userController extends Controller
{

    public function login(Request $request)
    {
        $datamasuk = $request->validate([
            "loginname" => ["required"],
            "loginpassword" => ["required"]
        ]);
        if (auth()->attempt(["name" => $datamasuk["loginname"], "password" => $datamasuk["loginpassword"]])) {
            $request->session()->regenerate();
            return redirect('/landingp');
        } else {
            return redirect('/loginwrong');
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
    public function register(Request $request)
    {
        $datamasuk = $request->validate([
            "email" => ["required", Rule::unique("users", "email")],
            "name" => ["required", Rule::unique("users", "name")],
            "password" => ["required"]
        ]);
        $user = User::create($datamasuk);
        auth()->login($user);
        return redirect('/landingp');
    }
}
