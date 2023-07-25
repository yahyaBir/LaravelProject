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


    public function editCategory($id)
    {
        $userInf = categoryModel::whereId($id)->first();
        if ($userInf) {
            return view("editCategory", compact('userInf'));
        } else {
            return redirect()->route("getCategory");
        }
    }
    public function editCategoryPost(Request $request, $id)
    {
        $validated = $request->validate([
            'categorytitle_edit' => 'unique:CategoryTable,CategoryTitle,'.$id,
        ]);
        $categorytitle_edit = $request->categorytitle_edit;
        $categorydesc_edit = $request->categorydesc_edit;
        $categorystatus_edit = $request->categorystatus_edit;

        categoryModel::whereId($id)->update([
            "CategoryTitle" => $categorytitle_edit,
            "CategoryDescription" => $categorydesc_edit,
            "Status" => $categorystatus_edit
        ]);
        return redirect('/list-category-menu');
    }


    public function deleteCategory($id)
    {
        $userInf = categoryModel::whereId($id)->first();
        if ($userInf)
        {
            return view("deleteCategory",compact('userInf'));
        }
        return redirect()->route("getCategory");
    }

    public function deleteCategoryGet($id)
    {
        categoryModel::whereId($id)->delete();

        return redirect()->route("getCategory");
    }
}
