<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //Dashboard
    public function dashboard(){
        return view('admin.dashboard');
    }
}
