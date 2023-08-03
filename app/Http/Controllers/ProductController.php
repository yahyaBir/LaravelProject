<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use Illuminate\Http\Request;
use App\Models\categoryModel;

class ProductController extends Controller
{
    public function addProductView()
    {
        $categoryId = CategoryModel::all();
        return view("addProduct", compact('categoryId'));
    }
    public function addProduct(Request $request)
    {
        $validated = $request->validate([

            'ProductTitle' => 'required|unique:ProductTable',
            'ProductBarcode' =>'required',
            'ProductStatus' =>'required'
        ]);
        $product_title = $request->ProductTitle;
        $product_category = $request->ProductCategory;
        $product_barcode = $request->ProductBarcode;
        $product_status = $request->ProductStatus;

        productModel::create([
            "ProductTitle" => $product_title,
            "ProductCategoryId" => $product_category,
            "Barcode" => $product_barcode,
            "ProductStatus" => $product_status
        ]);
        if ($product_title == '') {
            return redirect()->back()->withErrors('');
        }

        return redirect('/product/list');
    }
    public function listProduct()
    {
        $product = productModel::all();
        return view ("listProduct", array('product' => $product));
    }
    public function editProduct($id)
    {
        $categoryId = CategoryModel::get();
        $userInf = productModel::whereId($id)->first();
        $category = CategoryModel::whereId($userInf->ProductCategoryID)->first();
        if ($userInf) {
            return view("editProduct", ['userInf' => $userInf, 'categoryId'=> $categoryId, 'categoryTitle'=> $category]);
        } else {
            return redirect()->route("product-list");
        }
    }
    public function editProductPost(Request $request, $id)
    {
        $validated = $request->validate([
            'ProductTitle' => 'required|alpha_num:ascii:ProductTable,'.$id,
        ]);
        $producttitle_edit = $request->ProductTitle;
        $productcategory_edit = $request->ProductCategory;
        $productbarcode_edit = $request->ProductBarcode;
        $productstatus_edit = $request->ProductStatus;

        productModel::whereId($id)->update([
            "ProductTitle" => $producttitle_edit,
            "ProductCategoryId" => $productcategory_edit,
            "Barcode" => $productbarcode_edit,
            "ProductStatus" => $productstatus_edit,
        ]);
        if ($producttitle_edit == '') {
            return redirect()->back()->withErrors('');
        }
        return redirect('product/list');
    }













    public function deleteProduct($id)
    {
        $userInf = productModel::whereId($id)->first();
        if ($userInf)
        {
            return view("deleteProduct",compact('userInf'));
        }
        return redirect()->route("product-list");
    }
    public function deleteProductGet($id)
    {
        productModel::whereId($id)->delete();
        return redirect()->route("product-list");

    }
}




