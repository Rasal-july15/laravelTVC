<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //category all
    public function allCategory(){
        return view('admin.all_category');
    }
    //category add
    public function addCategory(){
        return view('admin.add_category');
    }
}
