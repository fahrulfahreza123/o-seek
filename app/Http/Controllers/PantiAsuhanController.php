<?php

namespace App\Http\Controllers;

use App\Models\PantiAsuhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PantiAsuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Tangkap jumlah data per halaman dari request, default ke 5 jika tidak ada
        $perPage = $request->get('per_page', 5);
    
        // Ambil data panti asuhan sesuai jumlah data per halaman
        $panti_asuhans = PantiAsuhan::paginate($perPage);
    
        // Kirim variabel `perPage` ke view
        return view('administrator/ManajemenPantiAsuhan/DataPantiAsuhan.index', compact('panti_asuhans', 'perPage'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administrator/ManajemenPantiAsuhan/DataPantiAsuhan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            $rules = [
                'nama_panti_asuhan' => 'required|string',
                'alamat' => 'required|string',
                'nama_yayasan' => 'required|string',
                'jumlah_penghuni' => 'required|integer',
                'no_handphone' => 'required|string',
                'jam_operasional' => 'required|string',
                'foto_panti_asuhan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'koordinat' => 'required|string',
                'provinsi' => 'required|string',
                'kota_kabupaten' => 'required|string',
                'kelurahan' => 'required|string',
                'kecamatan' => 'required|string',
                'kode_pos' => 'required|string',
                'link_maps' => 'required|string',
                'deskripsi' => 'required|string',
                'visi' => 'required|string',
                'misi' => 'required|string',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            // Validasi input
            $validated = $validator->validate();

            // Buat objek baru untuk data PantiAsuhan
            $data = new PantiAsuhan();
            $data->fill($validated); // Mengisi data selain foto_panti_asuhan

            // Proses upload foto jika ada
            if ($request->hasFile('foto_panti_asuhan')) {
                $filename = time() . '.' . $request->foto_panti_asuhan->extension();
                $request->foto_panti_asuhan->move(public_path('photo'), $filename);

                // Menyimpan hanya nama file ke database
                $data->foto_panti_asuhan = $filename;
            }

            // Simpan data ke database
            $data->save();

            // Redirect setelah berhasil
            return redirect()->route('panti_asuhan.index')->with('success', 'Data berhasil ditambahkan.');
        } catch (\Throwable $th) {

            // Tangani error
            dd('Error' . $th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PantiAsuhan $panti_asuhan)
    {
        //
        return view('administrator/ManajemenPantiAsuhan/DataPantiAsuhan.show', compact('panti_asuhan'));
    }

    public function DetailPantiAsuhan(PantiAsuhan $panti_asuhan)
    {
        //
        return view('administrator/ManajemenPantiAsuhan/DetailPantiAsuhan.DetailPantiAsuhan', compact('panti_asuhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PantiAsuhan $panti_asuhan)
    {
        //
        return view('administrator/ManajemenPantiAsuhan/DataPantiAsuhan.edit', compact('panti_asuhan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PantiAsuhan $panti_asuhan)
{
    // Validasi data input
    $request->validate([
        'nama_panti_asuhan' => 'required|string',
        'alamat' => 'required|string',
        'nama_yayasan' => 'required|string',
        'jumlah_penghuni' => 'required|integer',
        'no_handphone' => 'required|string',
        'jam_operasional' => 'required|string',
        'foto_panti_asuhan' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'koordinat' => 'required|string',
        'provinsi' => 'required|string',
        'kota_kabupaten' => 'required|string',
        'kelurahan' => 'required|string',
        'kecamatan' => 'required|string',
        'kode_pos' => 'required|string',
        'link_maps' => 'required|string',
        'deskripsi' => 'required|string',
        'visi' => 'required|string',
        'misi' => 'required|string',
    ]);

    // Update data lainnya
    $panti_asuhan->fill($request->except('foto_panti_asuhan'));

    // Proses file upload jika ada
    if ($request->hasFile('foto_panti_asuhan')) {
        // Hapus file lama jika ada
        if ($panti_asuhan->foto_panti_asuhan) {
            $oldImagePath = public_path('photo/' . $panti_asuhan->foto_panti_asuhan);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Simpan file baru
        $filename = time() . '.' . $request->foto_panti_asuhan->extension();
        $request->foto_panti_asuhan->move(public_path('photo'), $filename);
        $panti_asuhan->foto_panti_asuhan = $filename;
    }

    // Simpan perubahan ke database
    $panti_asuhan->save();

    // Redirect dengan pesan sukses
    return redirect()->route('panti_asuhan.index')->with('success', 'Data berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PantiAsuhan $panti_asuhan)
    {
        //
        if ($panti_asuhan->foto_panti_asuhan) {
            Storage::disk('public')->delete($panti_asuhan->foto_panti_asuhan);
        }

        $panti_asuhan->delete();

        return redirect()->route('panti_asuhan.index')->with('success', 'Data berhasil dihapus.');
    }


    public function showDetail($id)
{
    // Ambil data panti asuhan berdasarkan ID
    $panti = PantiAsuhan::findOrFail($id);

    // Pastikan data ini sudah ada di database
    $panti = [
        'nama_panti_asuhan' => $panti->nama_panti_asuhan,
        'alamat' => $panti->alamat,
        'nama_yayasan' => $panti->nama_yayasan,
        'jumlah_penghuni' => $panti->jumlah_penghuni,
        'no_handphone' => $panti->no_handphone,
        'jam_operasional' => $panti->jam_operasional,
        'foto_panti_asuhan' => $panti->foto_panti_asuhan,
        'koordinat' => $panti->koordinat,
        'provinsi' => $panti->provinsi,
        'kota_kabupaten' => $panti->kota_kabupaten,
        'kelurahan' => $panti->kelurahan,
        'kecamatan' => $panti->kecamatan,
        'kode_pos' => $panti->kode_pos,
        'link_maps' => $panti->link_maps,
        'deskripsi' => $panti->deskripsi,
        'visi' => $panti->visi,
        'misi' => $panti->misi,
    ];

    // Return ke view dengan data
    return view('Administrator.ManajemenPantiAsuhan.DetailPantiAsuhan.DetailPantiAsuhan', compact('panti'));
}

}
