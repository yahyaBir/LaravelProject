<?php

namespace App\Http\Controllers;

use App\Models\loginModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;



class LoginController extends Controller
{
    public function loginView()
    {
        return view("loginMenu");
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = loginModel::where('Username', $username)->first();

        if ($user && $user->Password === $password) {
            return redirect('/main-menu');
        }
        else {
            return redirect()->back()->with('error', 'Username or Password wrong.');
        }
    }
}



