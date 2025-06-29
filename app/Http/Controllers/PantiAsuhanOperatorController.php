<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PantiAsuhanOperator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PantiAsuhanOperatorController extends Controller
{
    public function dashboard()
    {
        if (Auth::guard('operator')->check()) {
            // Dapatkan operator yang sedang login
            $operator = Auth::guard('operator')->user();
    
            // Ambil id panti asuhan yang terkait dengan operator ini
            $pantiAsuhan = PantiAsuhanOperator::where('operator_s_id', $operator->id)->first();
    
            // Pastikan variabel $pantiAsuhan tidak null sebelum mengirimkan ke view
            return view('operator.dashboard.dashboard', compact('pantiAsuhan'));
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

    // Menampilkan detail panti asuhan
    public function show($id)
    {
        $pantiAsuhan = PantiAsuhanOperator::findOrFail($id);
        return view('operator.ManajemenPantiOperator.manajemen-panti-operator', compact('pantiAsuhan'));
    }

    // Memperbarui data panti asuhan
    public function update(Request $request, $id)
    {
        // Cari PantiAsuhan berdasarkan id
        $pantiAsuhan = PantiAsuhanOperator::findOrFail($id);

        // Validasi data
        $validatedData = $request->validate([
            'nama_panti_asuhan' => 'nullable|string|max:255',
            'nama_yayasan' => 'nullable|string|max:255',
            'jumlah_penghuni' => 'nullable|integer',
            'alamat' => 'nullable|string',
            'provinsi' => 'nullable|string',
            'kota_kabupaten' => 'nullable|string',
            'kecamatan' => 'nullable|string',
            'kelurahan' => 'nullable|string',
            'kode_pos' => 'nullable|string|max:10',
            'tanggal' => 'nullable|date',
            'no_handphone' => 'nullable|string|max:15',
            'jam_operasi' => 'nullable|string',
            'nama_bank' => 'nullable|string',
            'no_rekening' => 'nullable|string|max:50',
            'dokumen_akte_pendirian' => 'nullable|file|mimes:pdf|max:2048',
            'sk_pengesahan' => 'nullable|file|mimes:pdf|max:2048',
            'dokumen_sosial' => 'nullable|file|mimes:pdf|max:2048',
            'koordinat' => 'nullable|string',
            'link_google_map' => 'nullable|string',
            'foto_panti_asuhan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'foto_kegiatan_panti_asuhan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'sejarah' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
        ]);

        // Mengelola upload file
        if ($request->hasFile('dokumen_akte_pendirian')) {
            if (!empty($pantiAsuhan->dokumen_akte_pendirian)) { // Hanya hapus jika ada file lama
                Storage::disk('public')->delete($pantiAsuhan->dokumen_akte_pendirian);
            }
            $validatedData['dokumen_akte_pendirian'] = $request->file('dokumen_akte_pendirian')->store('dokumen', 'public');
        }

        if ($request->hasFile('sk_pengesahan')) {
            if (!empty($pantiAsuhan->sk_pengesahan)) { // Hanya hapus jika ada file lama
                Storage::disk('public')->delete($pantiAsuhan->sk_pengesahan);
            }
            $validatedData['sk_pengesahan'] = $request->file('sk_pengesahan')->store('dokumen', 'public');
        }

        if ($request->hasFile('dokumen_sosial')) {
            if (!empty($pantiAsuhan->dokumen_sosial)) { // Hapus file lama jika ada
                $oldFile = public_path('dokumen/' . $pantiAsuhan->dokumen_sosial);
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }
        
            // Simpan dokumen dengan nama asli
            $file = $request->file('dokumen_sosial');
            $filename = $file->getClientOriginalName(); // Pakai nama asli
            $file->move(public_path('dokumen'), $filename); // Simpan di public/dokumen
        
            // Simpan nama file ke database
            $pantiAsuhan->dokumen_sosial = $filename;
        }

        // if ($request->hasFile('dokumen_sosial')) {
        //     if (!empty($pantiAsuhan->dokumen_sosial)) { // Hanya hapus jika ada file lama
        //         Storage::disk('public')->delete($pantiAsuhan->dokumen_sosial);
        //     }
        //     $validatedData['dokumen_sosial'] = $request->file('dokumen_sosial')->store('dokumen', 'public');
        // }
        
        // Proses upload foto panti asuhan jika ada
        if ($request->hasFile('foto_panti_asuhan')) {
            // Hapus file lama jika ada
            if (!empty($pantiAsuhan->foto_panti_asuhan)) {
                $oldFile = public_path('photo/' . $pantiAsuhan->foto_panti_asuhan);
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            // Simpan file dengan nama unik
            $file = $request->file('foto_panti_asuhan');
            $filename = $file->hashName(); // Nama unik otomatis
            $file->move(public_path('photo'), $filename);

            // Simpan nama file ke database
            $pantiAsuhan->foto_panti_asuhan = $filename;
        }

        if ($request->hasFile('foto_kegiatan_panti_asuhan')) {
            // Hapus file lama jika ada
            if (!empty($pantiAsuhan->foto_kegiatan_panti_asuhan)) {
                $oldFile = public_path('photo/' . $pantiAsuhan->foto_kegiatan_panti_asuhan);
                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }
            }

            // Simpan file dengan nama unik
            $file = $request->file('foto_kegiatan_panti_asuhan');
            $filename = $file->hashName(); // Nama unik otomatis
            $file->move(public_path('photo'), $filename);

            // Simpan nama file ke database
            $pantiAsuhan->foto_kegiatan_panti_asuhan = $filename;
        }

        $pantiAsuhan->update(array_merge(
            array_filter($validatedData, fn($value) => !is_null($value)), 
            ['foto_panti_asuhan' => $pantiAsuhan->foto_panti_asuhan],// Pastikan nama file tetap masuk ke database
            ['foto_kegiatan_panti_asuhan' => $pantiAsuhan->foto_kegiatan_panti_asuhan],
            ['dokumen_akte_pendirian' => $pantiAsuhan->dokumen_akte_pendirian], // Pastikan dokumen tetap masuk
            ['sk_pengesahan' => $pantiAsuhan->sk_pengesahan], // Pastikan dokumen tetap masuk
            ['dokumen_sosial' => $pantiAsuhan->dokumen_sosial] // Pastikan dokumen tetap masuk // Pastikan nama file tetap masuk ke database
        ));

        // Update hanya data yang tidak kosong
        // $pantiAsuhan->update(array_filter($validatedData, fn($value) => !is_null($value)));

        return redirect()->route('panti_asuhan_operator.show', ['id' => $id])->with('success', 'Data panti asuhan berhasil diperbarui.');
    }

    // Menyimpan data panti asuhan
    // public function store(Request $request)
    // {
    //     // Cek apakah operator sudah memiliki panti asuhan
    //     if (Auth::user()->pantiAsuhanOperator) {
    //         return redirect()->route('dashboard_operator')->with('error', 'Anda sudah memiliki Panti Asuhan!');
    //     }

    //     // Validasi input
    //     $request->validate([
    //         'nama_panti_asuhan' => 'required|string|max:255',
    //         'nama_yayasan' => 'required|string|max:255',
    //         'jumlah_penghuni' => 'required|integer|min:1',  // Validasi agar hanya angka
    //         'provinsi' => 'required|in:1,2,3',  // Validasi agar provinsi yang dipilih adalah 1, 2, atau 3,
    //         'kota_kabupaten' => 'required|string|max:255',
    //         'kecamatan' => 'required|string|max:255',
    //         'kelurahan' => 'required|string|max:255',
    //         'foto_panti_asuhan' => 'nullable|image',
    //         'no_handphone' => 'required|string|max:15',
    //         'tanggal' => 'required|date',
    //         'jam_operasi' => 'required|date_format:H:i',  // Format jam seperti 12:45 PM
    //         'alamat' => 'required|string',
    //         'kode_pos' => 'required|string|max:10',
    //         'link_google_map' => 'required|string',
    //         'koordinat' => 'required|string',
    //         'foto_kegiatan_panti_asuhan' => 'nullable|image',
    //     ]);

    //     // Proses upload foto jika ada
    //     $filename_panti_asuhan = null;
    //     $filename_kegiatan_panti_asuhan = null;

    //     if ($request->hasFile('foto_panti_asuhan')) {
    //         $filename_panti_asuhan = time() . '.' . $request->foto_panti_asuhan->extension();
    //         $request->foto_panti_asuhan->move(public_path('photo'), $filename_panti_asuhan);
    //     }

    //     if ($request->hasFile('foto_kegiatan_panti_asuhan')) {
    //         $filename_kegiatan_panti_asuhan = time() . '.' . $request->foto_kegiatan_panti_asuhan->extension();
    //         $request->foto_kegiatan_panti_asuhan->move(public_path('photo'), $filename_kegiatan_panti_asuhan);
    //     }

    //     // Simpan data ke database
    //     $data = PantiAsuhanOperator::create([
    //         'nama_panti_asuhan' => $request->nama_panti_asuhan,
    //         'nama_yayasan' => $request->nama_yayasan,
    //         'jumlah_penghuni' => $request->jumlah_penghuni,
    //         'provinsi' => $request->provinsi,
    //         'kota_kabupaten' => $request->kota_kabupaten,
    //         'kecamatan' => $request->kecamatan,
    //         'kelurahan' => $request->kelurahan,
    //         'foto_panti_asuhan' => $request->foto_panti_asuhan,
    //         'no_handphone' => $request->no_handphone,
    //         'tanggal' => $request->tanggal,
    //         'jam_operasi' => $request->jam_operasi,  // Format waktu sudah valid
    //         'alamat' => $request->alamat,
    //         'kode_pos' => $request->kode_pos,
    //         'link_google_map' => $request->link_google_map,
    //         'koordinat' => $request->koordinat,
    //         'foto_kegiatan_panti_asuhan' => $request->foto_kegiatan_panti_asuhan,
    //         'operator_s_id' => Auth::id(),  // Menyimpan ID operator yang sedang login
    //     ]);

    //     // Menyimpan hanya nama file ke database
    //     if ($filename_panti_asuhan) {
    //         $data->foto_panti_asuhan = $filename_panti_asuhan;
    //         $data->save();
    //     }

    //     if ($filename_kegiatan_panti_asuhan) {
    //         $data->foto_kegiatan_panti_asuhan = $filename_kegiatan_panti_asuhan;
    //         $data->save();
    //     }

    //     return redirect()->route('dashboard_operator')->with('success', 'Panti Asuhan berhasil ditambahkan.');
    // }
}
