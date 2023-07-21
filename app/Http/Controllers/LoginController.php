<?php

namespace App\Http\Controllers;

use App\Models\loginModel;
use Illuminate\Http\Request;
use App\Models\userModel;
use Illuminate\Http\RedirectResponse;
use DB;


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
        } else {
            $request->validate([
                "username" => "required|min:3",
                "password" => "required|min:6",
            ]);
            return redirect()->back();
        }
    }
}



