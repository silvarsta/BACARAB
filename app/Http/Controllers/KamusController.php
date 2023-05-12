<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use Illuminate\Http\Request;

class KamusController extends Controller
{
    public function dictionary()
    {
        $kamus = Kamus::all();
        return view('admin.dictionary', ['kamus' => $kamus]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'gambar' => '',
            'indonesia' => 'required',
            'arab' => 'required',
            'pelafalan' => 'required',
            'kelompok' => 'required',
        ]);
        $kamus = Kamus::create($validateData);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('kamus/', $request->file('gambar')->getClientOriginalName());
            $kamus->gambar = $request->file('gambar')->getClientOriginalName();
            $kamus->save();
        }

        return redirect()->route('admin.dictionary')->with('pesan', "Penambahan data {$validateData['indonesia']} berhasil");
    }


    public function show($kamus)
    {
        $result = Kamus::findOrFail($kamus);
        return view('admin.show', ['kamus' => $result]);
    }

    public function edit(Kamus $kamus)
    {
        return view('admin.edit', ['kamus' => $kamus]);
    }

    public function update(Request $request, Kamus $kamus)
{
    $validateData = $request->validate([
        'gambar' => '',
        'indonesia' => 'required',
        'arab' => 'required',
        'pelafalan' => 'required',
        'kelompok' => 'required',
    ]);

    $kamus->update($validateData);
    return redirect()->route('admin.dictionary', ['kamus' => $kamus->id])
        ->with('pesan', "Update data {$validateData['indonesia']} berhasil");
}


    public function destroy(Kamus $kamus)
    {
        $kamus->delete();
        return redirect()->route('admin.dictionary')
            ->with('pesan', "Hapus data $kamus->indonesia berhasil");
    }

    public function gameKata()
    {
        $kamus = Kamus::all();
        return view('gameKata', ['kamus' => $kamus]);
    }


    // public function account(){

    //     $data = array(
    //         'title' => 'Account Setting',
    //         'menu_account' => 'active'
    //     );

    //     return view('account', $data);
    // }
}
