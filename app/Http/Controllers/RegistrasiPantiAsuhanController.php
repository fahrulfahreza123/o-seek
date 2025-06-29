<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiPantiAsuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RegistrasiPantiAsuhanController extends Controller
{
    public function index()
    {
        $registrasiPantiAsuhans = RegistrasiPantiAsuhan::all();
        return view('administrator/laporan_data_donasi/validasi', compact('registrasiPantiAsuhans'));
    }

    public function create()
    {
        return view('registrasi_panti_asuhan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_panti_asuhan' => 'required|string|max:255',
            'nama_yayasan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'provinsi' => 'required|string',
            'kota_kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'akte_pendirian_panti_asuhan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'surat_tanda_daftar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lembaga_kesejahteraan_sosial' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sk_pengesahan_badan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'hukum_yayasan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        foreach (['akte_pendirian_panti_asuhan', 'surat_tanda_daftar', 'lembaga_kesejahteraan_sosial', 'sk_pengesahan_badan', 'hukum_yayasan'] as $field) {
            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store('dokumen_pendukung', 'public');
            }
        }

        RegistrasiPantiAsuhan::create($data);

        return redirect()->route('registrasi_panti_asuhan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $registrasiPantiAsuhan = RegistrasiPantiAsuhan::findOrFail($id);
        return view('registrasi_panti_asuhan.show', compact('registrasiPantiAsuhan'));
    }

    public function edit($id)
    {
        $registrasiPantiAsuhan = RegistrasiPantiAsuhan::findOrFail($id);
        return view('registrasi_panti_asuhan.edit', compact('registrasiPantiAsuhan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_panti_asuhan' => 'required|string|max:255',
            'nama_yayasan' => 'required|string|max:255',
            'alamat' => 'required|string',
            'provinsi' => 'required|string',
            'kota_kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
        ]);

        $regsitrasiPantiAsuhan = RegistrasiPantiAsuhan::findOrFail($id);
        $data = $request->all();

        foreach (['akte_pendirian_panti_asuhan', 'surat_tanda_daftar', 'lembaga_kesejahteraan_sosial', 'sk_pengesahan_badan', 'hukum_yayasan'] as $field) {
            if ($request->hasFile($field)) {
                // Hapus file lama
                if ($regsitrasiPantiAsuhan[$field]) {
                    Storage::delete('public/' . $regsitrasiPantiAsuhan[$field]);
                }
                // Upload file baru
                $data[$field] = $request->file($field)->store('dokumen_pendukung', 'public');
            }
        }

        $regsitrasiPantiAsuhan->update($data);

        return redirect()->route('registrasi_panti_asuhan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $regsitrasiPantiAsuhan = RegistrasiPantiAsuhan::findOrFail($id);

        // Hapus file terkait
        foreach (['akte_pendirian_panti_asuhan', 'surat_tanda_daftar', 'lembaga_kesejahteraan_sosial', 'sk_pengesahan_badan', 'hukum_yayasan'] as $field) {
            if ($regsitrasiPantiAsuhan[$field]) {
                Storage::delete('public/' . $regsitrasiPantiAsuhan[$field]);
            }
        }

        $regsitrasiPantiAsuhan->delete();

        return redirect()->route('registrasi_panti_asuhan.index')->with('success', 'Data berhasil dihapus.');
    }
}
