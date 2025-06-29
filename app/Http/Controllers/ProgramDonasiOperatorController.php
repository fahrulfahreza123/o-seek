<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramDonasi; // Pastikan model sesuai

class ProgramDonasiOperatorController extends Controller
{
    public function index(Request $request)
    {
         // Jumlah entri per halaman
    $perPage = $request->input('per_page', 5);

    // Ambil data dengan pagination
    $programDonasi = ProgramDonasi::paginate($perPage);
        // Kirim data ke view
        return view('Operator.ManajemenDonasi.ProgramDonasi.TableProgramDonasi.program', compact('programDonasi'));
        
    }

    public function adminIndex(Request $request)
{
    // Jumlah entri per halaman (default 5 jika tidak ada input)
    $perPage = $request->input('per_page', 5);

    // Ambil data program donasi dengan pagination
    $programDonasi = ProgramDonasi::paginate($perPage);

    // Kirim data ke view untuk administrator
    return view('Administrator.ManajemenDonasi.ProgramDonasi.program-donasi', compact('programDonasi', 'perPage'));
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
