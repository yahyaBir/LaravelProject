<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
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
    public function addCategoryTitle(Request $request)
    {
        $validated = $request->validate([
            'category-title' => 'unique:CategoryTable,CategoryTitle',
        ]);

        $categoryTitle=$request->categorytitleadd;
        $categoryDesc=$request->categorydescadd;
        $categoryStatus=$request->categorystatusadd;

        categoryModel::create([
            "CategoryTitle"=>$categoryTitle,
            "CategoryDescription"=>$categoryDesc,
            "Status"=>$categoryStatus
        ]);
        return redirect('/main-menu');
    }
    public function getCategoryList()
    {
        $category = categoryModel::all();
        return view ('listCategory', array('category' => $category));
    }
}
