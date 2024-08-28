<?php

namespace App\Http\Controllers;

use App\Models\Bengkel;
use Illuminate\Http\Request;

class BengkelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bengkel.index');
    }

    public function store(Request $request)
    {
        try {
            $validasi = $request->validate([
                "nama" => ['required', 'max:50'],
                "alamat" => ['required'],
                "latitude" => ['required', 'numeric'],
                "longitude" => ['required', 'numeric'],
            ]);

            Bengkel::create($validasi);

            flash()->success('Bengkel Dengan Nama ' . $request->nama . ' Berhasil Ditambahkan');
            return redirect()->back();
        } catch (\Exception $e) {
            flash()->error('Terjadi kesalahan saat memperbarui Mekanik: ' . $e->getMessage());
            return redirect()->back()->withInput(); // Mengembalikan input agar tidak hilang
        }
    }

    public function update(Bengkel $bengkel, Request $request)
    {
        try {
            $validasi = $request->validate([
                "nama" => ['required', 'max:50'],
                "alamat" => ['required'],
                "latitude" => ['required', 'numeric'],
                "longitude" => ['required', 'numeric'],
            ]);

            $bengkel->update($validasi);

            flash()->success('Bengkel Dengan Nama ' . $request->nama . ' Berhasil Diperbarui');
            return redirect()->back();
        } catch (\Exception $e) {
            // Menangani kesalahan dengan mengirimkan pesan error
            flash()->error('Terjadi kesalahan saat memperbarui Mekanik: ' . $e->getMessage());
            return redirect()->back()->withInput(); // Mengembalikan input agar tidak hilang
        }
    }

    public function destroy(Bengkel $bengkel)
    {
        $bengkel->delete();

        flash()->success('BEngkel Dengan Username ' . $bengkel->nama . ' Berhasil Dihapus');
        return redirect()->back();
    }
}
