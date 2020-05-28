<?php

namespace App\Http\Controllers\admincontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //all member
    public function allMember(){
        return view('admin.all_member');
    }
    //add member
    public function addMember(){
        return view('admin.add_member');
    }
}
