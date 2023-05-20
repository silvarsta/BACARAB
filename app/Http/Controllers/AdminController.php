<?php

namespace App\Http\Controllers;
use App\Models\Kamus;
use App\Models\Printable;


use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {

        $kamus = Kamus::all();
        $kamusCount = Kamus::count();
        $printable = Printable::all();
        $printableCount = Printable::count();
        return view('admin.dashboard', compact('kamus','kamusCount', 'printable', 'printableCount'));
    }

    public function victor()
    {
        return view('victor');
    }

    public function about()
    {
        return view('aboutAdmin');
    }

    public function account()
    {
        return view('admin.account');
    }

    // public function dictionary(){
    //     return view('admin.dictionary');
    // }
}
