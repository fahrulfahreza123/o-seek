<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function showUserName()
    {
        // Mengambil satu nama pengguna dari tabel users
        $user = User::select('name')->first(); // Mengambil pengguna pertama, sesuaikan nama kolom 'name' dengan kolom yang ada di database Anda

        // Mengirim data nama pengguna ke view
        return view('user', ['name' => $user ? $user->name : 'Nama tidak ditemukan']);
    }
}
