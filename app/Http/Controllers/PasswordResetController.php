<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class PasswordResetController extends Controller
{
    // Kirim kode verifikasi melalui API
    public function sendVerificationCode(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $email = $request->email;
        $verificationCode = rand(100000, 999999);

        // Simpan kode ke session (atau database jika lebih aman)
        Session::put('verification_code', $verificationCode);
        Session::put('email', $email);

        // Kirim email dengan kode verifikasi
        try {
            Mail::raw("Your verification code is: $verificationCode", function ($message) use ($email) {
                $message->to($email)->subject('Password Reset Verification Code');
            });
        } catch (\Exception $e) {
            Log::error("Error sending email: " . $e->getMessage());
            return response()->json(['error' => 'Failed to send email.'], 500);
        }
    }

    // Verifikasi kode melalui API
    public function verifySecurityCode(Request $request)
    {
        $request->validate(['verification_code' => 'required|numeric']);

        if ($request->verification_code == Session::get('verification_code')) {
            return response()->json(['message' => 'Verification code is valid'], 200);
        } else {
            return response()->json(['error' => 'Invalid verification code'], 400);
        }
    }

    // Reset password melalui API
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Reset password
        $user->password = Hash::make($request->password);
        $user->save();

        // Hapus session
        Session::forget(['verification_code', 'email']);

        return response()->json(['message' => 'Password has been reset successfully'], 200);
    }
}
