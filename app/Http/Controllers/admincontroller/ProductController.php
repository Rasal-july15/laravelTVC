<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //all product
    public function allProduct(){
        return view('admin.all_product');
    }
    //aadd product
    public function addProduct(){
        return view('admin.add_product');
    }
}
