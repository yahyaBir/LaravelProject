<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;


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

        $user = User::where('username', $username)->first();

        if ($user && $user->password === $password) {
            //Auth::attempt(['username'=>$username, 'password'=>$password]);
            //Auth::login($user);
            return redirect()->route('main-view');
        } else {

            return redirect()->back()->with('error', 'Username or Password wrong.');
        }
    }
}



