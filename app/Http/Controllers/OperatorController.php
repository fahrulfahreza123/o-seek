<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use App\Models\Operator_;
use App\Models\RegistrasiPantiAsuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OperatorController extends Controller
{
    public function create()
    {
        return view('operator.create');
    }
    // Menampilkan data operator
    public function index()
    {
        $operators = Operator::all(); // Ambil semua data dari tabel operator
        return view('Operator.Login.LoginPage.login', compact('operators'));
    }

    public function validasi(Request $request)
    {
        $operators = RegistrasiPantiAsuhan::all(); // Ambil semua data dari tabel operator
        $perPage = $request->input('per_page', 10);
        return view('Administrator.ManajemenPantiAsuhan.ValidasiOperator.validasi-operator', compact('operators', 'perPage'));
        // // Ambil jumlah data per halaman dari parameter URL, default ke 10 jika tidak ada

        // // Ambil semua data operator dengan pagination
        // $operators = Operator::paginate($perPage);

        // // Kirim data ke view
        // return view('Administrator.ManajemenPantiAsuhan.ValidasiOperator.validasi-operator', compact('operators', 'perPage'));
    }

    // Tampilkan form register panti asuhan
    public function showRegisterFormPanti()
    {
        return view('operator.Login.FormRegisterPage.form');
    }

    public function register_panti(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_operator' => 'required|string|max:255',
            'nama_panti_asuhan' => 'required|string|max:255',
            'nama_yayasan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'provinsi' => 'required|string|max:100',
            'kota_kabupaten' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kelurahan' => 'required|string|max:100',
            'no_rekening' => 'required|string|max:50',
            'dokumen_akte_pendirian' => 'required|file|mimes:pdf|max:2048',
            'sk_pengesahan' => 'required|file|mimes:pdf|max:2048',
            'foto_panti_asuhan' => 'nullable|image|max:2048',
        ]);
    
        // Proses upload dokumen
        $dokumenAkte = $request->file('dokumen_akte_pendirian')->store('dokumen', 'public');
        $skPengesahan = $request->file('sk_pengesahan')->store('dokumen', 'public');
    
        // Proses upload foto jika ada
        $fotoPantiAsuhan = null;
        if ($request->hasFile('foto_panti_asuhan')) {
            $fotoPantiAsuhan = $request->file('foto_panti_asuhan')->store('photo', 'public');
        }
    
        // Simpan data ke tabel Operator
        Operator::create([
            'nama_operator' => $request->nama_operator,
            'nama_panti_asuhan' => $request->nama_panti_asuhan,
            'nama_yayasan' => $request->nama_yayasan,
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kota_kabupaten' => $request->kota_kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'no_rekening' => $request->no_rekening,
            'dokumen_akte_pendirian' => $dokumenAkte,
            'sk_pengesahan' => $skPengesahan,
            'foto_panti_asuhan' => $fotoPantiAsuhan,
        ]);
    
        // $user = Auth::guard('operator')->user(); // Ambil pengguna yang sedang login
        // // Update data operator_id di tabel Operator_
        // if ($user && $user->operator_) {
        //     $user->operator_->operator_id = $operator->id; 
        //     $user->operator_->save(); // Simpan perubahan
        // }

        // Kirim respons sukses
        return response()->json(['message' => 'Registrasi panti asuhan berhasil!'], 200);
    }

}

