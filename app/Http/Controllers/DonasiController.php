<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\PantiAsuhan;
use Illuminate\Http\Request;
use App\Models\ProgramDonasi;
use App\Models\PantiAsuhanOperator;
use Illuminate\Support\Facades\Session;

class DonasiController extends Controller
{
    public function create()
    {
        // Ambil semua data panti asuhan dari tabel panti_asuhan
        $pantiAsuhanOperator = PantiAsuhanOperator::all();

        // Kirim data panti_asuhan ke view
        return view('viewer.donasi.donate', [
            'pantiAsuhanOperator' => $pantiAsuhanOperator,
            'title' => 'Donasi', // Tambahkan title
            'active' => '' // Tambahkan active
        ]);
    }

    public function getProgramDonasiByPantiAsuhan($pantiAsuhanOperatorId)
    {
        // Ambil program donasi berdasarkan panti asuhan yang dipilih
        $programDonasis = ProgramDonasi::where('panti_asuhan_operators_id', $pantiAsuhanOperatorId)->get();

        return response()->json(['programDonasis' => $programDonasis]);
    }

    public function createMethodPayment()
    {
        // Ambil semua data panti asuhan dari tabel panti_asuhan
        $pantiAsuhan = PantiAsuhan::all();

        // Kirim data panti_asuhan ke view
        return view('viewer.donasi.method_payment', [
            'pantiAsuhan' => $pantiAsuhan,
            'title' => 'Method Payment', // Tambahkan title
            'active' => '' // Tambahkan active
        ]);
    }

    public function store(Request $request)
    {
        // Cek apakah program donasi sudah tercapai target donasinya
        $programDonasi = ProgramDonasi::find($request->program_donasis_id);
        $jumlahDonasi = Donasi::where('program_donasis_id', $programDonasi->id)->sum('nomDonasi');
        if ($jumlahDonasi >= $programDonasi->target_donasi) {
            session()->flash('error', 'Program donasi sudah tercapai target donasinya');
            return redirect()->route('home.index');
        }

        // Cek apakah 'anonymous' dicentang dan set nama_donatur menjadi "Hamba Allah" jika ya
        if ($request->has('anonymous')) {
            // Mengganti nilai nama_donatur dengan 'Hamba Allah'
            $request->merge(['nama_donatur' => 'Hamba Allah']);
        }

        // Menambahkan key 'pesan' dengan nilai null jika tidak ada di request
        if (!$request->has('sendMessage')) {
            $request->merge(['pesan' => null]);
        }

        // Validasi input dari form
        $validatedData = $request->validate([
            'jenis_donasi' => 'required|in:infaq,sedekah|string|max:255',
            'panti_asuhan_operators_id' => 'required|exists:panti_asuhan_operators,id',
            'program_donasis_id' => [
                'required',
                'exists:program_donasis,id',
                function ($attribute, $value, $fail) use ($request) {
                    $programDonasi = ProgramDonasi::find($value);
                    if (!$programDonasi || $programDonasi->panti_asuhan_operators_id != $request->panti_asuhan_operators_id) {
                        $fail('Program donasi tidak ditemukan untuk panti asuhan yang dipilih.');
                    }
                },
            ],
            // 'program_donasis_id' => 'required|exists:program_donasis,id|exists:panti_asuhan_operators,id,' . $request->panti_asuhan_operators_id, // Pastikan program donasi terkait dengan panti asuhan yang dipilih
            'nama_donatur' => $request->has('anonymous') ? 'nullable|string|max:255' : 'required|string|max:255',
            'phoneNumber' => 'required|string|max:15',
            'email' => 'nullable|email|max:255',
            'pesan' => $request->has('sendMessage') ? 'required|string|min:5|max:1000' : 'nullable|string|max:1000',
            'nomDonasi_radio' => 'required_without:nomDonasi_lain|integer|in:10000,20000,30000,40000,50000,60000,70000,80000', // Validasi radio button
            'nomDonasi_lain' => 'nullable|integer|min:2000|max:1000000000', // Validasi text field
        ], [
            'nomDonasi_radio.required_without' => 'Pilih salah satu nominal donasi dari pilihan yang ada.',
            'nomDonasi_lain.required_without' => 'Masukkan nominal donasi lainnya jika tidak memilih pilihan yang ada.',
            'nomDonasi_lain.min' => 'Nominal minimal adalah Rp. 2.000.',
            'nomDonasi_lain.max' => 'Nominal maksimal adalah Rp. 1.000.000.000.',
            'nomDonasi_radio.in' => 'Pilihan nominal tidak valid.',
            'program_donasis_id.exists' => 'Program donasi tidak ditemukan untuk panti asuhan yang dipilih.',
        ]);

        // Pastikan salah satu dari kedua field (radio button atau text field) terisi
        if (!$request->filled('nomDonasi_radio') && !$request->filled('nomDonasi_lain')) {
            return back()->withErrors(['nomDonasi' => 'Anda harus memilih nominal donasi atau memasukkan nominal lain.']);
        }

        // Menentukan nominal yang akan disimpan ke database
        $nominal = $request->input('nomDonasi_lain') ?: $request->input('nomDonasi_radio');

        // Cek apakah nominal donasi melebihi target donasi
        $programDonasi = ProgramDonasi::find($request->program_donasis_id);
        if ($nominal > $programDonasi->target_donasi) {
            return back()->withErrors(['nomDonasi' => 'Nominal donasi yang Anda masukkan melebihi target donasi 
            pada program donasi ini.']);
        }
        
        // Simpan data ke Session
        Session::put('donation_data', [
            'jenis_donasi' => $validatedData['jenis_donasi'],
            'panti_asuhan_operators_id' => $validatedData['panti_asuhan_operators_id'],
            'program_donasis_id' => $validatedData['program_donasis_id'],
            'nama_donatur' => $validatedData['nama_donatur'],
            'phoneNumber' => $validatedData['phoneNumber'],
            'email' => $validatedData['email'],
            'pesan' => $validatedData['pesan'],
            'nomDonasi' => $nominal,
        ]);

        // Redirect atau respons setelah berhasil menyimpan data
        return redirect()->route('donasi.storeMethodPayment');
    }

    public function methodPayment()
    {
        // Ambil data dari Session
        $donationData = Session::get('donation_data');

        // Jika session kosong, redirect ke form awal
        if (!$donationData) {
            return redirect()->route('donasi.store')->withErrors('Data donasi tidak ditemukan.');
        }

        return view('viewer.donasi.method_payment', compact('donationData'));
    }

    public function storeMethodPayment(Request $request)
    {
        // Validasi input metode pembayaran
        $validatedData = $request->validate([
            'methodPayment' => 'required|in:BRI,BNI,BCA,BJB,BSI,Mandiri,Gopay,OVO,Dana,Indomaret,Alfamart',
        ]);

        // Ambil data dari Session
        $donationData = Session::get('donation_data');

        // Jika session kosong, redirect ke form awal
        if (!$donationData) {
            return redirect()->route('donasi.store')->withErrors('Data donasi tidak ditemukan.');
        }

        // Gabungkan data donasi dengan metode pembayaran
        $donationData['methodPayment'] = $validatedData['methodPayment'];

        // Simpan ke database
        Donasi::create($donationData);

        // Hapus data dari Session
        Session::forget('donation_data');

        // Redirect ke halaman sukses
        return redirect()->route('home.index')->with('success', 'Terima kasih, donasi Anda telah berhasil disimpan!');
    }
}
