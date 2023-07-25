<?php

namespace App\Http\Controllers;

use App\Models\loginModel;
use App\Models\productModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProductView()
    {
        return view("addProduct");
    }
    public function deleteProductView()
    {
        return view("deleteProduct");
    }
    public function listProductView()
    {
        return view("listProduct");
    }
    public function addProduct(Request $request)
    {
        $validated = $request->validate([
            'product_title' => 'required',
            'product_barcode' =>'required',
            'product_status' =>'required'
        ]);
        $product_title = $request->product_title;
        $product_category = $request->product_category;
        $product_barcode = $request->product_barcode;
        $product_status = $request->product_status;

        productModel::create([
            "ProductTitle" => $product_title,
            "ProductCategoryId" => $product_category,
            "Barcode" => $product_barcode,
            "ProductStatus" => $product_status
        ]);
        return redirect('/main-menu');
    }
}
