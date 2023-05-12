<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gameKataController extends Controller
{
    public function gameKata(){
        return view('gameKata');
    }
}
