<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //all slider
    public function slider(){
        return view('admin.slider');
    }
    //add slider
    public function addSlider(){
        return view('admin.add_slider');
    }
}
