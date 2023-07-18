<?php

namespace App\Http\Controllers;

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
}
