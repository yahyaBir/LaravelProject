<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function addUserView()
    {
        return view("addUser");
    }

    public function deleteUserView()
    {
        return view("deleteUser");
    }

    public function listUserView()
    {
        return view("listUser");
    }

    public function editUserView()
    {
        return view("editUser");
    }

    public function addUser(Request $request){

        $validated=$request->validate([

            'usernameadd'=>'required|alpha_num:ascii|unique:UserTable,Username',

            'passwordadd'=>'required|min:6',

        ]);

        $username_add=$request->usernameadd;
        $usertitle_add=$request->usertitleadd;
        $password_add=$request->passwordadd;

        loginModel::create([
            "Username"=>$username_add,
            "UserTitle"=>$usertitle_add,
            "Password"=>$password_add
        ]);
        return redirect('/main-menu');
    }

    public function getUsers()
    {
        $userCollection = loginModel::all();
        //$userCollection = DB::table('UserTable')->get();

        return view ('listUser', array('userCollection' => $userCollection));
    }
}
