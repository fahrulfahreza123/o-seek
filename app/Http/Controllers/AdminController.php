<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Metode untuk menampilkan validasi operator
    public function validasi()
    {
        // Ambil data operator dengan pagination
        $operators = Operator::paginate(10); // Tentukan jumlah data per halaman, misalnya 10
        return view('Administrator.ManajemenPantiAsuhan.ValidasiOperator.validasi-operator', compact('operators'));
    }

    // Method untuk menerima data panti asuhan
    public function acceptPanti($id)
    {
        // Cari data operator berdasarkan ID
        $operator = Operator::find($id);

        if ($operator) {
            // Update status operator menjadi 'accepted'
            $operator->status = 'accepted';
            $operator->save(); // Simpan perubahan

            // Redirect kembali ke halaman validasi dengan pesan sukses
            return redirect()->route('admin.validasi')->with('success', 'Operator telah diterima.');
        } else {
            // Jika operator tidak ditemukan, beri pesan error
            return redirect()->route('admin.validasi')->with('error', 'Operator tidak ditemukan.');
        }
    }

    // Method untuk menolak data panti asuhan
    public function rejectPanti($id)
    {
        // Temukan data berdasarkan ID
        $operator = Operator::findOrFail($id);

        // Ubah status menjadi 'rejected'
        $operator->status = 'rejected';
        $operator->save();

        // Hapus data operator dari database
        $operator->delete();

        // Redirect dengan pesan gagal
        return redirect()->route('admin.validasi')->with('error', 'Data panti asuhan ditolak.');
    }
}
