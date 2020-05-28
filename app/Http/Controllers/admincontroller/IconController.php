<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IconController extends Controller
{
    //all icon
    public function icons(){
        return view('admin.icon');
    }
    //add icon
    public function addIcon(){
        return view('admin.add_icon');
    }
}
