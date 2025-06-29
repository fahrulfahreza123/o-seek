<?php

namespace App\Http\Controllers;

use App\Models\Operator_;
use App\Models\PantiAsuhanOperator;
use App\Models\RegistrasiPantiAsuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Operator_Controller extends Controller
{
    public function dashboard()
    {
        if (Auth::guard('operator')->check()) { 
            $operator = Auth::guard('operator')->user();
    
            return view('operator.dashboard.dashboard', [
                'operator_s_id' => $operator->id, // Sesuaikan jika kolom operator_s_id ada di tabel operator_
            ]);
        } else {
            return redirect()->route('login_operator')->with('error', 'Anda perlu login terlebih dahulu.');
        }

        // if (Auth::check()) {
        //     // Pengguna sudah login
        //     return view('operator.dashboard.dashboard');
        // } else {
        //     // Pengguna belum login
        //     return redirect()->route('login_operator')->with('error', 'Anda perlu login terlebih dahulu.');
        // }
    }

    // Tampilkan form register
    public function showRegisterForm()
    {
        return view('operator.Login.RegisterPage.register');
    }

    // Proses register
    public function register(Request $request)
    {
        // Validasi input dari form registrasi operator
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:operator_s,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Simpan data registrasi operator sementara di session
        Session::put('operator_data', [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'], // Enkripsi password
        ]);
    
        // Redirect ke halaman registrasi panti asuhan untuk melengkapi data operator
        return redirect()->route('register_panti')->with('success', 'Register berhasil! Silakan Masukkan Data Panti Asuhan Kamu.');
    }

    public function showRegisterFormPanti()
    {
        // Ambil data dari Session
        $operatorData = Session::get('operator_data');

        // Jika session kosong, redirect ke form awal
        if (!$operatorData) {
            return redirect()->route('register')->withErrors('Data register tidak ditemukan.');
        }

        return view('operator.Login.FormRegisterPage.form');
    }

    public function register_panti(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama_panti_asuhan' => 'required|string|max:255',
            'nama_yayasan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nama_bank' => 'required|in:1,2,3,4,5',
            'provinsi' => 'required|in:1,2,3',
            'kota_kabupaten' => 'required|in:1,2,3',
            'kecamatan' => 'required|in:1,2,3',
            'kelurahan' => 'required|in:1,2,3',
            'no_rekening' => 'required|string|max:50',
            'dokumen_akte_pendirian' => 'required|file|mimes:pdf|max:2048',
            'dokumen_sosial' => 'required|file|mimes:pdf|max:2048',
            'sk_pengesahan' => 'required|file|mimes:pdf|max:2048',
        ]);

        // dd($request->all());

        // Ambil data dari Session
        $operatorData = Session::get('operator_data');

        // Jika session kosong, redirect ke form awal
        if (!$operatorData) {
            return redirect()->route('register')->withErrors('Data register tidak ditemukan.');
        }

        // Simpan data operator
        $operator = Operator_::create([
            'name' => $operatorData['name'],
            'email' => $operatorData['email'],
            'password' => bcrypt($operatorData['password']), // Hash password
        ]);
    
        // Proses upload dokumen
        $dokumenAkte = $request->file('dokumen_akte_pendirian')->store('dokumen', 'public');
        $dokumenSosial = $request->file('dokumen_sosial')->store('dokumen', 'public');
        $skPengesahan = $request->file('sk_pengesahan')->store('dokumen', 'public');
    
        // Proses upload foto jika ada
        // $fotoPantiAsuhan = null;
        // if ($request->hasFile('foto_panti_asuhan')) {
        //     $fotoPantiAsuhan = $request->file('foto_panti_asuhan')->store('photo', 'public');
        // }

        // Simpan ke registrasi_panti_asuhans
        RegistrasiPantiAsuhan::create([
            'nama_panti_asuhan' => $validatedData['nama_panti_asuhan'],
            'nama_yayasan' => $validatedData['nama_yayasan'],
            'alamat' => $validatedData['alamat'],
            'nama_bank' => $validatedData['nama_bank'],
            'provinsi' => $validatedData['provinsi'],
            'kota_kabupaten' => $validatedData['kota_kabupaten'],
            'kecamatan' => $validatedData['kecamatan'],
            'kelurahan' => $validatedData['kelurahan'],
            'no_rekening' => $validatedData['no_rekening'],
            'dokumen_akte_pendirian' => $dokumenAkte,
            'dokumen_sosial' => $dokumenSosial,
            'sk_pengesahan' => $skPengesahan,
            // 'foto_panti_asuhan' => $fotoPantiAsuhan,
        ]);
    
        // Simpan data ke tabel Operator
        // PantiAsuhanOperator::create([
        //     'operator_s_id' => $operator->id, // Menyimpan ID operator
        //     'nama_panti_asuhan' => $validatedData['nama_panti_asuhan'],
        //     'nama_yayasan' => $validatedData['nama_yayasan'],
        //     'alamat' => $validatedData['alamat'],
        //     'nama_bank' => $validatedData['nama_bank'],
        //     'provinsi' => $validatedData['provinsi'],
        //     'kota_kabupaten' => $validatedData['kota_kabupaten'],
        //     'kecamatan' => $validatedData['kecamatan'],
        //     'kelurahan' => $validatedData['kelurahan'],
        //     'no_rekening' => $validatedData['no_rekening'],
        //     'dokumen_akte_pendirian' => $dokumenAkte,
        //     'dokumen_sosial' => $dokumenSosial,
        //     'sk_pengesahan' => $skPengesahan,
        // ]);
            // 'foto_panti_asuhan' => $fotoPantiAsuhan,

        // Hapus data dari Session
        Session::forget('operator_data');

        // Kirim respons sukses
        return response()->json(['message' => 'Registrasi panti asuhan berhasil!'], 200);
    }

    // Tampilkan form login
    public function showLoginForm()
    {
        return view('operator.Login.LoginPage.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to login as Operator_
        if (Auth::guard('operator')->attempt($request->only('email', 'password'))) {
            $user = Auth::guard('operator')->user();
    
            // Cek status di tabel Operator (untuk validasi status)
            if ($user->operator && $user->operator->status === 'pending') {
                Auth::guard('operator')->logout();
                return redirect()->route('login')->with('error', 'Data Anda belum divalidasi oleh admin.');
            } elseif ($user->operator && $user->operator->status === 'rejected') {
                Auth::guard('operator')->logout();
                return redirect()->route('login')->with('error', 'Data Anda ditolak. Silakan lakukan registrasi ulang.');
            }
    
            // Jika status accepted, lanjutkan ke dashboard
            return redirect()->route('dashboard.operator');
        }
    
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    // protected function authenticated($request, $user)
    // {
    //     if (Auth::guard('operator')->check() && $user->role === 'operator' && $user->status !== 'accepted') {
    //         Auth::guard('operator')->logout(); // Logout pengguna
    //         if ($user->status === 'pending') {
    //             return redirect()->route('login')->with('error', 'Data Anda belum divalidasi oleh admin.');
    //         } elseif ($user->status === 'rejected') {
    //             return redirect()->route('login')->with('error', 'Data Anda ditolak. Silakan lakukan registrasi ulang.');
    //         }
    //     }
    
    //     // Jika status diterima, arahkan ke dashboard
    //     return redirect()->intended('/DashboardOperator');
    // }

    // Logout
    public function logout()
    {
        Operator_::logout();
        return redirect()->route('login_operator');
    }
}
