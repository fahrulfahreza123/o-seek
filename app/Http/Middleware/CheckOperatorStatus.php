<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckOperatorStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah pengguna sudah login dengan guard 'operator'
        if (Auth::guard('operator')->check()) {
            $user = Auth::guard('operator')->user();

            // Periksa status pengguna
            if ($user->status === 'pending') {
                Auth::guard('operator')->logout(); // Logout pengguna
                return redirect()->route('login')->with('error', 'Data Anda belum divalidasi oleh admin.');
            } elseif ($user->status === 'rejected') {
                Auth::guard('operator')->logout(); // Logout pengguna
                return redirect()->route('login')->with('error', 'Data Anda ditolak. Silakan lakukan registrasi ulang.');
            }
        }

        return $next($request);
    }
}
