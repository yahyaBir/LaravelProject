<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
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
    public function addUser(Request $request)
    {
        $validated=$request->validate([
            'usernameAdd'=>'required|alpha_num:ascii|unique:UserTable,Username',
            'passwordAdd'=>'required|min:6',
        ]);
        $username_add=$request->usernameAdd;
        $usertitle_add=$request->usertitleAdd;
        $password_add=$request->passwordAdd;

        loginModel::create([
            "Username"=>$username_add,
            "UserTitle"=>$usertitle_add,
            "Password"=>$password_add
        ]);
        return redirect('/main-menu');
    }
    public function getUserList()
    {
        $userCollection = loginModel::all();
        return view ('listUser', array('userCollection' => $userCollection));
    }

    public function userEdit(Request $request,$id)
    {
        $username_edit=$request->usernameEdit;
        $usertitle_edit=$request->usertitleEdit;
        $password_edit=$request->passwordEdit;

        loginModel::whereId($id)->update([
            "Username"=>$username_edit,
            "UserTitle"=>$usertitle_edit,
            "Password"=>$password_edit
        ]);
    }
    public function valueToForm(loginModel $user)
    {
        return view('editUser', array('user' => $user));
    }
    public function deleteUser(Request $request)
    {
        $ids=$request->deleteUser;
        LoginModel::whereIn('id',$ids)->delete();
        return redirect()->route('listUser');
    }
    public function deleteSLC(Request $request)
    {
        $id=$request->deleteSelect;
        LoginModel::whereIn('id',$id)->delete();
        return redirect()->route('listUser');
    }
}


