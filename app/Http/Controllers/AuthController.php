<?php

namespace App\Http\Controllers;

// namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller; // Pastikan ini diimpor


class AuthController extends Controller
{

    // Auth
    public function __construct()
    {
        if (method_exists($this, 'middleware')) {
            $this->middleware('auth')->except(['showLoginForm', 'showRegisterForm', 'login', 'register']);
        } else {
            dd('Middleware method does not exist on Controller class.');
        }
    }

    // Register
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            // 'role' => 'required|string|in:admin,operator,user', // Tambahkan validasi role
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Simpan data pengguna ke database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'role' => $request->role, // Tambahkan role
        ]);

        // Login pengguna setelah registrasi
        Auth::login($user);

        // Arahkan ke dashboard setelah login
        return redirect('DashboardAdmin');

        // if ($user->role === 'admin') {
        //     return redirect('DashboardAdmin');
        // } elseif ($user->role === 'operator') {
        //     return redirect('DashboardOperator');
        // } else {
        //     return redirect('DashboardUser');
        // }
    }

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Validasi kredensial
        if (Auth::attempt($request->only('email', 'password'))) {
            // Regenerasi session ID untuk mencegah session fixation attacks
            $request->session()->regenerate();

            return redirect('DashboardAdmin'); // Arahkan ke dashboard setelah login
        }

        return back()->withErrors([
            'email' => 'EMAIL ATAU PASSWORD ANDA SALAH!',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user dari session

        // Invalidasi session
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // Regenerasi token CSRF

        return redirect('/login'); // Arahkan ke halaman login
    }


    //------------------MEMUNCULKAN HALAMAN--------------------

    // Menampilkan login form
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('DashboardAdmin'); // Arahkan ke dashboard jika sudah login
        }
        return view('administrator.login.login');
    }

    // Menampilkan register form
    public function showRegisterForm()
    {
        if (Auth::check()) {
            return redirect('DashboardAdmin'); // Arahkan ke dashboard jika sudah login
        }
        return view('administrator.login.register');
    }
}
