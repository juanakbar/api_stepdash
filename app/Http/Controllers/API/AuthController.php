<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     *    @OA\Post(
     *       path="/login",
     *       tags={"Login"},
     *       operationId="Login",
     *       summary="Login",
     *       description="Login",
     *       @OA\Response(
     *           response="200",
     *           description="Ok",
     *           @OA\JsonContent
     *           (example={
     *               "success": true,
     *               "message": "Login Berhasil",
     *               "data": {
     * 
     *              }
     *          }),
     *      ),
     *  )
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        $user = Auth::user();

        $token = $user->createToken('auth_token')->plainTextToken;
        $user->getRoleNames();
        return response()->json([
            'message' => 'User successfully logged in',
            'user' => $user,
            'token' => $token, // Menggunakan Spatie package untuk mendapatkan role names
        ], 200);
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'telepon' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'username' => 'required|string|max:255',

        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        $role = Role::where('name', $request->role)->first();

        if ($role) {
            $user->assignRole($role);
        }
        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user,
        ], 201);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'User successfully logged out',
        ], 200);
    }
}
