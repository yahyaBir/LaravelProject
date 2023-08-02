<?php

namespace App\Http\Controllers;

use App\Models\categoryModel;
use App\Models\productModel;
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
        //$validated = $request->validate([
          //  'CategoryTitle' => 'required|unique:CategoryTable,CategoryTitle',
            //'CategoryDescription'=> 'required',
           // 'Status'=> 'required',
        //]);

        $categoryTitle=$request->CategoryTitle;
        $categoryDesc=$request->CategoryDescription;
        $categoryStatus=$request->CategoryStatus;

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
            return redirect()->route("category-edit");
        }
    }
    public function editCategoryPost(Request $request, $id)
    {
        $validated = $request->validate([
            'CategoryTitle' => 'unique:CategoryTable,CategoryTitle,'.$id,
        ]);
        $categorytitle_edit = $request->CategoryTitle;
        $categorydesc_edit = $request->categorydesc_edit;
        $categorystatus_edit = $request->categorystatus_edit;

        categoryModel::whereId($id)->update([
            "CategoryTitle" => $categorytitle_edit,
            "CategoryDescription" => $categorydesc_edit,
            "Status" => $categorystatus_edit
        ]);
        return redirect('/category/list');
    }
    public function deleteCategory($id)
    {
        $userInf = categoryModel::whereId($id)->first();
        productModel::whereIn("ProductCategoryID",$userInf)->update([
            "ProductCategoryID"=> null,
        ]);
        if ($userInf)
        {
            return view("deleteCategory",compact('userInf'));
        }
        return redirect()->route("category-list");
    }
    public function deleteCategoryGet($id)
    {
        categoryModel::whereId($id)->delete();

        return redirect()->route("category-list");
    }
}
