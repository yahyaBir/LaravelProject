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
    public function addUser(Request $request)
    {
        $validated = $request->validate([
            'usernameAdd' => 'required|alpha_num:ascii|unique:UserTable,Username',
            'passwordAdd' => 'required|min:6',
        ]);
        $username_add = $request->usernameAdd;
        $usertitle_add = $request->usertitleAdd;
        $password_add = $request->passwordAdd;

        loginModel::create([
            "Username" => $username_add,
            "UserTitle" => $usertitle_add,
            "Password" => $password_add
        ]);
        return redirect('/main-menu');
    }
    public function getUserList()
    {
        $userCollection = loginModel::all();
        return view('listUser', array('userCollection' => $userCollection));
    }
    public function deleteSLC(Request $request)
    {
        $ids = $request->deleteSelect;
        LoginModel::whereIn('id', $ids)->delete();
        return redirect()->route('listUser');
    }
    public function valueToForm(loginModel $user)
    {
        return view('editUser', ['user' => $user]);
    }
    public function editUser($id)
    {
        $userInf = loginModel::whereId($id)->first();
        if ($userInf) {
            return view("editUser", compact('userInf'));
        } else {
            return redirect()->route("listUser");
        }
    }
    public function editUserPost(Request $request, $id)
    {
        $validated = $request->validate([
            'username_edit' => 'alpha_num|required|unique:UserTable,Username',
            'password_edit' => 'min:6',
        ]);
        $username_edit = $request->username_edit;
        $usertitle_edit = $request->usertitle_edit;
        $password_edit = $request->password_edit;

        if (empty($password_edit)) {
            loginModel::whereId($id)->update([
                "Username" => $username_edit,
                "UserTitle" => $usertitle_edit,
            ]);
        } else {
            loginModel::whereId($id)->update([
                "Username" => $username_edit,
                "UserTitle" => $usertitle_edit,
                "Password" => $password_edit
            ]);
        }
        return redirect('/list-user');
    }
    public function deleteUser($id)
    {
        $userInf = loginModel::whereId($id)->first();
        if ($userInf)
        {
            return view("deleteUser",compact('userInf'));
        }
        return redirect()->route("listUser");
    }
    public function deleteUserGet($id)
    {
        loginModel::whereId($id)->delete();
        return redirect()->route("listUser");
    }
}
