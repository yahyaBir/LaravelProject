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
    public function addUser(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|alpha_num:ascii|unique:UserTable,Username',
            'password' => 'required|min:6',
        ]);
        $username_add = $request->username;
        $usertitle_add = $request->usertitleAdd;
        $password_add = $request->password;

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
        return redirect()->route('user-list');
    }
    public function editUser($id)
    {
        $userInf = loginModel::whereId($id)->first();
        if ($userInf) {
            return view("editUser", compact('userInf'));
        } else {
            return redirect()->route("user-list");
        }
    }
    public function editUserPost(Request $request, $id)
    {
        $userInf = loginModel::whereId($id)->first();

        $username_edit = $request->username;
        $usertitle_edit = $request->usertitle_edit;
        $password_edit = $request->password_edit;

        $uniqueRule = Rule::unique('UserTable')->ignore($userInf->id);
        $this->validate($request, [
            'username' => ['alpha_num','required', 'string', $uniqueRule],
        ]);

        if (empty($password_edit)) {
            loginModel::whereId($id)->update([
                "Username" => $username_edit,
                "UserTitle" => $usertitle_edit,
            ]);
        } else {
            $validated = $request->validate([
                'password_edit' => 'min:6',
            ]);
            loginModel::whereId($id)->update([

                "Username" => $username_edit,
                "UserTitle" => $usertitle_edit,
                "Password" => $password_edit
            ]);
        }
        return redirect('/user-list');
    }
    public function deleteUser($id)
    {
        $userInf = loginModel::whereId($id)->first();
        if ($userInf)
        {
            return view("deleteUser",compact('userInf'));
        }
        return redirect()->route("user-list");
    }
    public function deleteUserGet($id)
    {
        loginModel::whereId($id)->delete();
        return redirect()->route("user-list");
    }
}
