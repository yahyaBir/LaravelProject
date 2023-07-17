<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;

class LoginController extends Controller
{
    public function loginMenu()
    {
        return view("loginForm");
    }

    public function sonuc()
    {
    echo "bu kısım çalıştıo";
    }

}
