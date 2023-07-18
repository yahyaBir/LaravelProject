<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategoryView()
    {
        return view("addCategory");
    }

    public function deleteCategoryView()
    {
        return view("deleteCategory");
    }

    public function listCategoryView()
    {
        return view("listCategory");
    }

    public function editCategoryView()
    {
        return view("editCategory");
    }
}
