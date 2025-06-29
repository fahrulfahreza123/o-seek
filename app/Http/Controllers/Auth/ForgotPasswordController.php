<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('administrator.login.forgot-password');
    }

    public function handleForgotPassword(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        // Cari user berdasarkan name
        $user = User::where('name', $request->name)->first();

        if (!$user) {
            return back()->withErrors(['name' => 'name tidak ditemukan.']);
        }

        // Generate password baru
        $newPassword = Str::random(8);

        // Update password di database
        $user->password = Hash::make($newPassword);
        $user->save();

        // Kirim password baru ke email user (jika ada email)
        if ($user->email) {
            Mail::to($user->email)->send(new \App\Mail\PasswordResetMail($newPassword));
        }

        return back()->with('success', 'Password baru telah dikirim ke email Anda (jika ada) atau hubungi admin.');
    }
}
