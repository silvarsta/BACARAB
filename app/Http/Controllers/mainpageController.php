<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainpageController extends Controller
{
    public function main(){
        return view('mainpage');
    }
}
