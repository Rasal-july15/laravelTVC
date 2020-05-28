<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //Brand all
    public function allBrand(){
        return view('admin.all_brand');
    }
    //Brand add
    public function addBrand(){
        return view('admin.add_brand');
    }
}
