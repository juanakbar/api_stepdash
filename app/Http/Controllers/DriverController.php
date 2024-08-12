<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('drivers.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validasi = $request->validate([
                "nama" => ['required'],
                "email" => ['required', 'unique:users,email'],
                "username" => ['required', 'unique:users,username'],
                "alamat" => ['required'],
                "telepon" => ['required'],
            ]);
            if ($request->hasFile('avatar')) {
                $imagePath = $request->file('avatar')->store('user_avatar', 'public');
                $validasi['avatar'] = $imagePath;
            }
            $user = User::create([
                'nama' => $validasi['nama'],
                'email' => $validasi['email'],
                'username' => $validasi['username'],
                'alamat' => $validasi['alamat'],
                'telepon' => $validasi['telepon'],
                'avatar' => $validasi['avatar'] ?? null,
                'password' => bcrypt($request->username . '.com'),
            ]);

            $customerRole = Role::where('name', 'Driver')->first();
            $user->assignRole($customerRole);
            flash()->success('Driver Dengan Username ' . $request->username . ' Berhasil Ditambahkan');
            return redirect()->back();
        } catch (\Exception $e) {
            // Menangani kesalahan dengan mengirimkan pesan error
            flash()->error('Terjadi kesalahan saat memperbarui Driver: ' . $e->getMessage());
            return redirect()->back()->withInput(); // Mengembalikan input agar tidak hilang
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        try {
            // Validasi input, tetapi abaikan aturan unique untuk email dan username jika nilainya tidak berubah
            $validasi = $request->validate([
                "nama" => ['required'],
                "email" => ['required', 'unique:users,email,' . $user->id],
                "username" => ['required', 'unique:users,username,' . $user->id],
                "alamat" => ['required'],
                "telepon" => ['required'],
            ]);

            // Periksa apakah ada file avatar yang diunggah
            if ($request->hasFile('avatar')) {
                $imagePath = $request->file('avatar')->store('user_avatar', 'public');
                $validasi['avatar'] = $imagePath;
            }

            // Update data pengguna
            $user->update([
                'nama' => $validasi['nama'],
                'email' => $validasi['email'],
                'username' => $validasi['username'],
                'alamat' => $validasi['alamat'],
                'telepon' => $validasi['telepon'],
                'avatar' => $validasi['avatar'] ?? $user->avatar, // Tetap gunakan avatar lama jika tidak diupdate
            ]);

            // Atur ulang role pengguna jika diperlukan
            $customerRole = Role::where('name', 'Driver')->first();
            $user->syncRoles($customerRole);

            flash()->success('Driver Dengan Username ' . $request->username . ' Berhasil Diperbarui');
            return redirect()->back();
        } catch (\Exception $e) {
            // Menangani kesalahan dengan mengirimkan pesan error
            flash()->error('Terjadi kesalahan saat memperbarui Driver: ' . $e->getMessage());
            return redirect()->back()->withInput(); // Mengembalikan input agar tidak hilang
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }
        $user->roles()->detach();
        $user->delete();
        flash()->success('Driver Dengan Username ' . $user->username . ' Berhasil Dihapus');
        return redirect()->back();
    }
}
