<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;
use Illuminate\Http\RedirectResponse;
use DB;


class LoginController extends Controller
{


    //view cagirma
    public function loginView()
    {
        return view("loginMenu");
    }


    //Kullanıcının girdigi bilgileri kontrol etme, kontrole gore yonlendirme
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



