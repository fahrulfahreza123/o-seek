<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Donasi;
use Illuminate\Http\Request;
use App\Models\ProgramDonasi;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 6 program donasi terbaru
        $programDonasi = ProgramDonasi::with('pantiAsuhanOperator', 'donasi')
            ->latest()
            ->take(6)
            ->get();

        // Hitung dana terkumpul dan progress untuk setiap program donasi
        $programDonasi = $programDonasi->map(function ($program) {
            // Hitung dana terkumpul: jumlahkan seluruh nominal donasi untuk program ini
            $danaTerkumpul = $program->donasi->sum('nomDonasi');

            // Hitung progress bar: (dana terkumpul / target donasi) * 100
            $persentase = ($program->target_donasi > 0)
                ? ($danaTerkumpul / $program->target_donasi) * 100
                : 0;
            
            // Jika dana terkumpul sudah mencapai target donasi, maka dana terkumpul sama dengan target donasi
            if ($danaTerkumpul >= $program->target_donasi) {
                $danaTerkumpul = $program->target_donasi;
                $persentase = 100;
            }

            return [
                'foto' => $program->foto_panti_asuhan,
                'foto_panti_asuhan' => $program->pantiAsuhanOperator->foto_panti_asuhan,
                'nama_panti_asuhan' => $program->pantiAsuhanOperator->nama_panti_asuhan,
                'nama_program_donasi' => $program->nama_program_donasi,
                'batas_waktu' => Carbon::parse($program->batas_waktu)->format('d F Y'),
                'dana_terkumpul' => $danaTerkumpul,
                'persentase' => number_format($persentase, 0) . '%',
                'target_donasi' => $program->target_donasi,
                'panti_asuhan_operators_id' => $program->pantiAsuhanOperator->id,
                'alamat_panti_asuhan' => $program->pantiAsuhanOperator->alamat,
            ];
        });

        // Kirim data ke view beranda (home)
        return view('viewer.beranda.home', [
            'title' => 'Home',
            'active' => 'home',
            'programDonasi' => $programDonasi,
        ]);
    }
}