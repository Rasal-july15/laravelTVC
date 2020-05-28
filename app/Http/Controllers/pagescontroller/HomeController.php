<?php

namespace App\Http\Controllers\pagescontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home page / Start Page
    public function home(){
        return view('pages.home');
    }
}
