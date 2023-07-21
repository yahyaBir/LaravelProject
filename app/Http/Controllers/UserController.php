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
    public function getUserList()
    {
        $userCollection = loginModel::all();
        return view ('listUser', array('userCollection' => $userCollection));
    }
    public function deleteSLC(Request $request)
    {
        $ids=$request->deleteSelect;
        LoginModel::whereIn('id',$ids)->delete();
        return redirect()->route('listUser');
    }
    public function userEdit(Request $request)
    {
        $userdata=$request->editSelect;
        loginModel::WhereIn('Username', $userdata)->all();
    }
    public function valueToForm(loginModel $user)
    {
        return view('editUser', array('user' => $user));
    }
    public function userEdited(Request $request,$id)
    {
        $validated=$request->validate([
            'usernameEdit'=>'required|alpha_num:ascii|unique:UserTable,Username',
            'passwordEdit'=>'required|min:6',
        ]);
        $username_edit=$request->usernameEdit;
        $usertitle_edit=$request->usertitleEdit;
        $password_edit=$request->passwordEdit;

        loginModel::whereId($id)->update([
            "Username"=>$username_edit,
            "UserTitle"=>$usertitle_edit,
            "Password"=>$password_edit
        ]);
        return redirect('/main-menu')->route('user-edited',[$id])->with('succes','User update is success');
    }
}

/*usernameEdit
        usertitleEdit
        password*/
