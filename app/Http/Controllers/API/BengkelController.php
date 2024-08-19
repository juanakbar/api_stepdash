<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bengkel;

class BengkelController extends Controller
{
    public function index()
    {
        $bengkels = Bengkel::all();
        return response()->json($bengkels, 200);
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

            $bengkel = Bengkel::create($validasi);

            return response()->json([
                'message' => 'Bengkel berhasil ditambahkan.',
                'data' => $bengkel,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menambahkan bengkel.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id_bengkel)
    {
        $bengkel = Bengkel::find($id_bengkel);

        if (!$bengkel) {
            return response()->json([
                'message' => 'Bengkel tidak ditemukan.',
            ], 404);
        }

        return response()->json($bengkel, 200);
    }

    public function update(Request $request, $id_bengkel)
    {
        $bengkel = Bengkel::find($id_bengkel);

        if (!$bengkel) {
            return response()->json([
                'message' => 'Bengkel tidak ditemukan.',
            ], 404);
        }

        try {
            $validasi = $request->validate([
                "nama" => ['required', 'max:50'],
                "alamat" => ['required'],
                "latitude" => ['required', 'numeric'],
                "longitude" => ['required', 'numeric'],
            ]);

            $bengkel->update($validasi);

            return response()->json([
                'message' => 'Bengkel berhasil diperbarui.',
                'data' => $bengkel,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat memperbarui bengkel.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id_bengkel)
    {
        $bengkel = Bengkel::find($id_bengkel);

        if (!$bengkel) {
            return response()->json([
                'message' => 'Bengkel tidak ditemukan.',
            ], 404);
        }

        $bengkel->delete();

        return response()->json([
            'message' => 'Bengkel berhasil dihapus.',
        ], 200);
    }
}
