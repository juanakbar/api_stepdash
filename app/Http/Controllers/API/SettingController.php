<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return response()->json($settings, 200);
    }

    public function store(Request $request)
    {
        try {
            $validasi = $request->validate([
                "app_name" => ['required', 'max:255'],
                "created_by" => ['required'],
                "minimum_fare" => ['required', 'numeric'],
                "version" => ['required', 'numeric'],
            ]);

            $setting = Setting::create($validasi);

            return response()->json([
                'message' => 'Pengaturan berhasil ditambahkan.',
                'data' => $setting,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menambahkan pengaturan.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        $setting = Setting::find($id);

        if (!$setting) {
            return response()->json([
                'message' => 'Pengaturan tidak ditemukan.',
            ], 404);
        }

        return response()->json($setting, 200);
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);

        if (!$setting) {
            return response()->json([
                'message' => 'Pengaturan tidak ditemukan.',
            ], 404);
        }

        try {
            $validasi = $request->validate([
                "app_name" => ['required', 'max:255'],
                "created_by" => ['required'],
                "minimum_fare" => ['required', 'numeric'],
                "version" => ['required', 'numeric'],
            ]);

            $setting->update($validasi);

            return response()->json([
                'message' => 'Pengaturan berhasil diperbarui.',
                'data' => $setting,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat memperbarui pengaturan.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        $setting = Setting::find($id);

        if (!$setting) {
            return response()->json([
                'message' => 'Pengaturan tidak ditemukan.',
            ], 404);
        }

        $setting->delete();

        return response()->json([
            'message' => 'Pengaturan berhasil dihapus.',
        ], 200);
    }
}
