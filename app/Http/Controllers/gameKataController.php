<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use Illuminate\Http\Request;

class gameKataController extends Controller
{

    public function gameKata()
    {
        $kamus = Kamus::all();
        return view('gameKata', ['kamus' => $kamus]);
    }
}
