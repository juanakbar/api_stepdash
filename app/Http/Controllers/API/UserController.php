<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'message' => 'Your Profile Account',
            'user' => $request->user(), // Menggunakan Spatie package untuk mendapatkan role names
        ], 200);
    }

    public function update(Request $request)
    {
        $user = $request->user();
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'username' => 'required|string|unique:users,username,' . $user->id,
            'telepon' => 'required|integer',
            'alamat' => 'required|string',
        ]);
        $user->update($validatedData);

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user,
        ], 200);
    }
}
