<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
