<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\isEmpty;


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

         $user= User::where('username', $username)->first();

        if (Auth::attempt(['username'=>$username, 'password'=>$password])) {
            return redirect()->route('main-view');
        } else{
            return redirect()->back()->with('usernameError', 'Username or Password wrong.');
        }
    }
    public function logout()
    {
        Auth::logout();
        return view('loginMenu');
    }
}



