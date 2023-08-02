<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    public function addUserView()
    {
        return view("addUser");
    }
    public function addUser(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|alpha_num:ascii|unique:usertable,username',
            'usertitle' => 'required',
            'password' => 'required|min:6',
        ]);
        $username_add = $request->username;
        $usertitle_add = $request->usertitle;
        $password_add = $request->password;

        User::create([
            "username" => $username_add,
            "usertitle" => $usertitle_add,
            "password" =>Hash::make($password_add)
        ]);
        return redirect('/main-menu');
    }
    public function getUserList()
    {
        $userCollection = User::all();
        return view('listUser', array('userCollection' => $userCollection));
    }
    public function deleteSLC(Request $request)
    {
        $ids = $request->deleteSelect;
        User::whereIn('id', $ids)->delete();
        return redirect()->route('user-list');
    }
    public function editUser($id)
    {
        $userInf = User::whereId($id)->first();
        if ($userInf) {
            return view("editUser", compact('userInf'));
        } else {
            return redirect()->route("user-list");
        }
    }
    public function editUserPost(Request $request, $id)
    {
        $userInf = User::whereId($id)->first();

        $username_edit = $request->username;
        $usertitle_edit = $request->usertitle_edit;
        $password_edit = $request->password_edit;

        $uniqueRule = Rule::unique('usertable')->ignore($userInf->id);
        $this->validate($request, [
            'username' => ['alpha_num','required', 'string', $uniqueRule],
        ]);

        if (empty($password_edit)) {
            User::whereId($id)->update([
                "username" => $username_edit,
                "usertitle" => $usertitle_edit,
            ]);
        } else {
            $validated = $request->validate([
                'password_edit' => 'min:6',
            ]);
            User::whereId($id)->update([

                "username" => $username_edit,
                "usertitle" => $usertitle_edit,
                "password" => $password_edit
            ]);
        }
        return redirect('/user/list');
    }
    public function deleteUser($id)
    {
        $userInf = User::whereId($id)->first();
        if ($userInf)
        {
            return view("deleteUser",compact('userInf'));
        }
        return redirect()->route("user-list");
    }
    public function deleteUserGet($id)
    {
        User::whereId($id)->delete();
        return redirect()->route("user-list");
    }
}
