<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //admin login page
    public function adminLogin(){
        return view('admin.admin_login');
    }
}
