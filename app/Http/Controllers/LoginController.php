<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;
use DB;


class LoginController extends Controller
{


    //view cagirma
    public function loginView()
    {
        return view("loginForm");
    }


    //Kullanıcının girdigi bilgileri kontrol etme, kontrole gore yonlendirme
    public function login(Request $request)
    {
        $username = $request->input('username-form');
        $password = $request->input('password-form');

        $user = loginModel::where('Username', $username)->first();

        if ($user && $user->Password === $password)
        {
            echo "login success";
        }
        else
        {
             return redirect()->back();
        }
    }


    //Veritabanina admin bilgilerini ekleme
    public function add()
    {
        DB::table("UserTable")->insert([
            "Username" => "Serra",
            "Password" => "123456789"
        ]);
    }
}


