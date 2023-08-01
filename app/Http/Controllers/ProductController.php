<?php

namespace App\Http\Controllers;

use App\Models\loginModel;
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
        //$validated = $request->validate([
          //  'ProductTitle' => 'required',
            //'ProductCategoryId' =>'required',
            //'ProductStatus' =>'required'
        //]);
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
        return redirect('/main-menu');
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
        if ($userInf) {
            return view("editProduct", compact('userInf','categoryId'));
        } else {
            return redirect()->route("product-list");
        }
    }
    public function editProductPost(Request $request, $id)
    {
        $validated = $request->validate([
            'ProductTitle' => 'alpha_num:ascii:ProductTable,ProductTitle,'.$id,
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




