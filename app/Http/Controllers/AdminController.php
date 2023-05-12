<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function victor(){
        return view('victor');
    }

    public function about(){
        return view('aboutAdmin');
    }

    public function account() {
        return view('admin.account');
    }

    // public function dictionary(){
    //     return view('admin.dictionary');
    // }
}
