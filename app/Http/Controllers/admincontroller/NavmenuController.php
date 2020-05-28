<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavmenuController extends Controller
{
    //all nav menu
    public function navmenus(){
        return view('admin.navmenu');
    }
    //add nav menu
    public function addNavmenu(){
        return view('admin.add_navmenu');
    }
}
