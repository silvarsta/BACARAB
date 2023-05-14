<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use Illuminate\Support\Facades\Storage;
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
            'gambar' => 'required|file|image|max:2000',
            'indonesia' => 'required',
            'arab' => 'required',
            'pelafalan' => 'required',
            'kelompok' => 'required',
        ]);
        $kamus = Kamus::create($validateData);

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move(public_path('assets/img/kamus'), $request->file('gambar')->getClientOriginalName());
            $kamus->gambar = $request->file('gambar')->getClientOriginalName();
            $kamus->save();
        }

        return redirect()->route('admin.dictionary')->with('pesan', "Penambahan data {$validateData['indonesia']} berhasil");
    }

    public function edit(Kamus $kamus)
    {
        return view('admin.edit', ['kamus' => $kamus]);
    }

    public function update(Request $request, Kamus $kamus)
    {
        $validateData = $request->validate([
            'gambar' => 'nullable|file|image|max:2000',
            'indonesia' => 'required',
            'arab' => 'required',
            'pelafalan' => 'required',
            'kelompok' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus file gambar yang lama
            Storage::delete($kamus->gambar);

            // Simpan file gambar yang baru
            $newImagePath = $request->file('gambar')->store('assets/img/kamus');
            $validateData['gambar'] = $newImagePath;
        } else {
            // Jika tidak ada file gambar baru, gunakan file gambar yang lama
            $validateData['gambar'] = $kamus->gambar;
        }

        $kamus->update($validateData);

        return redirect()->route('admin.dictionary', ['kamus' => $kamus->id])
            ->with('pesan', "Update data {$validateData['indonesia']} berhasil");
    }


    public function destroy(Kamus $kamus)
    {
        // Hapus gambar dari storage
        Storage::delete('public/assets/img/kamus/' . $kamus->gambar);

        // Hapus data Kamus dari database
        $kamus->delete();

        return redirect()->route('admin.dictionary')
            ->with('pesan', "Hapus data $kamus->indonesia berhasil");
    }
}
