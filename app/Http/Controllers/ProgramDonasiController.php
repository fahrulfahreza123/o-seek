<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramDonasi;
use App\Models\PantiAsuhanOperator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProgramDonasiController extends Controller
{
    public function create()
    {
        // Pastikan operator hanya membuat program untuk panti asuhannya
        $pantiAsuhanOperator = PantiAsuhanOperator::where('operator_s_id', Auth::id())->first();

        if (!$pantiAsuhanOperator) {
            return redirect()->route('dashboard_operator')->with('error', 'Anda belum memiliki Panti Asuhan!');
        }

        return view('operator.ManajemenDonasi.ProgramDonasi.TambahProgramDonasi.tambah_program', compact('pantiAsuhanOperator'));
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $rules = [
                'nama_program_donasi' => 'required|string|max:255',
                'batas_waktu' => 'required|date|after:today',  // Batas waktu harus setelah hari ini
                'target_donasi' => 'required|numeric|min:1',
                'foto_panti_asuhan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',  // Validasi foto
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);  // Kembalikan jika validasi gagal
            }

            // Ambil data panti asuhan berdasarkan ID operator yang sedang login
            $pantiAsuhan = PantiAsuhanOperator::where('operator_s_id', Auth::id())->first();

            if (!$pantiAsuhan) {
                return redirect()->route('dashboard_operator')->with('error', 'Anda belum memiliki Panti Asuhan!');
            }

            // Buat objek baru untuk Program Donasi
            $data = new ProgramDonasi();
            $data->nama_program_donasi = $request->nama_program_donasi;
            $data->batas_waktu = $request->batas_waktu;
            $data->target_donasi = $request->target_donasi;

            // Proses upload foto panti asuhan jika ada
            if ($request->hasFile('foto_panti_asuhan')) {
                // Simpan foto dengan nama file unik
                $filename = time() . '.' . $request->foto_panti_asuhan->extension();
                $request->foto_panti_asuhan->move(public_path('photo'), $filename);
                
                // Simpan nama file foto ke database
                $data->foto_panti_asuhan = $filename;
            }

            // Set relasi panti asuhan dan operator
            $data->panti_asuhan_operators_id = $pantiAsuhan->id;
            $data->operator_s_id = Auth::id();

            // Simpan data program donasi
            $data->save();

            // Redirect setelah berhasil
            return redirect()->route('dashboard_operator')->with('success', 'Program Donasi berhasil dibuat!');
        } catch (\Throwable $th) {
            // Tangani error
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    // public function store(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'nama_program_donasi' => 'required|string|max:255',
    //         'batas_waktu' => 'required|date|after:today',
    //         'target_donasi' => 'required|numeric|min:1',
    //         'foto_panti_asuhan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    //     ]);

    //     // Cek apakah operator sudah memiliki Panti Asuhan
    //     $pantiAsuhan = PantiAsuhanOperator::where('operator_s_id', Auth::id())->first();

    //     if (!$pantiAsuhan) {
    //         return redirect()->route('dashboard_operator')->with('error', 'Anda belum memiliki Panti Asuhan!');
    //     }

    //     // Proses upload foto jika ada
    //     $fotoPath = null;
    //     if ($request->hasFile('foto_panti_asuhan')) {
    //         // Menyimpan foto ke storage
    //         $fotoPath = $request->file('foto_panti_asuhan')->store('foto_panti_asuhan', 'photo');
    //     }

    //     // Simpan program donasi
    //     ProgramDonasi::create([
    //         'nama_program_donasi' => $request->nama_program_donasi,
    //         'batas_waktu' => $request->batas_waktu,
    //         'target_donasi' => str_replace('.', '', $request->target_donasi), // Pastikan target donasi tanpa format titik
    //         'foto_panti_asuhan' => $fotoPath,
    //         'panti_asuhan_id' => $pantiAsuhan->id,
    //         'operator_id' => Auth::id(),
    //     ]);

    //     return redirect()->route('dashboard_operator')->with('success', 'Program Donasi berhasil dibuat!');
    // }
    public function edit($id)
{
    $program = ProgramDonasi::findOrFail($id);

    return view('Operator.ManajemenDonasi.ProgramDonasi.EditProgramDonasi.editprogramdonasi', compact('program'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $validated = $request->validate([
        'nama_program_donasi' => 'required|string|max:255',
        'batas_waktu' => 'nullable|date',
        'target_donasi' => 'required|numeric|min:1',
        'foto_panti_asuhan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Cari program donasi berdasarkan ID
    $program = ProgramDonasi::findOrFail($id);

    // Update data
    $program->nama_program_donasi = $validated['nama_program_donasi'];
    // $program->batas_waktu = $validated['batas_waktu'];
    $program->batas_waktu = $validated['batas_waktu'] ?? null;
    $program->target_donasi = $validated['target_donasi'];

    // Jika ada foto baru, simpan dan ganti
    if ($request->hasFile('foto_panti_asuhan')) {
        $file = $request->file('foto_panti_asuhan');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('photo'), $filename);
        $program->foto_panti_asuhan = $filename;
    }

    // Simpan perubahan
    $program->save();

    // Redirect ke halaman sebelumnya dengan pesan sukses
    return redirect()->route('dashboard_operator')->with('success', 'Program Donasi berhasil diperbarui!');
}


public function destroy($id)
{
    try {
        // Cari program donasi berdasarkan ID
        $programDonasi = ProgramDonasi::findOrFail($id);

        // Hapus file foto jika ada
        if ($programDonasi->foto_panti_asuhan) {
            $fotoPath = public_path('photo/' . $programDonasi->foto_panti_asuhan);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }

        // Hapus program donasi
        $programDonasi->delete();

        // Redirect ke route program_donasi.operator dengan pesan sukses
        return redirect()->route('program_donasi.operator')->with('success', 'Program donasi berhasil dihapus.');
    } catch (\Exception $e) {
        // Tangani error dan redirect dengan pesan error
        return redirect()->route('program_donasi.operator')->with('error', 'Terjadi kesalahan saat menghapus program donasi.');
    }
}


}
