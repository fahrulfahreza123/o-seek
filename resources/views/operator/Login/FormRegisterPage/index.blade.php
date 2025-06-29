<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Operator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Operator</h1>

        <!-- Tombol Tambah Data -->
        <div class="mb-3">
            <a href="{{ route('operator.create') }}" class="btn btn-success">Tambah Data</a>
        </div>

        <!-- Tabel Data Operator -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Operator</th>
                    <th>Nama Panti Asuhan</th>
                    <th>Nama Yayasan</th>
                    <th>Alamat</th>
                    <th>Provinsi</th>
                    <th>Kota/Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>No. Rekening</th>
                    <th>Dokumen Akte</th>
                    <th>SK Pengesahan</th>
                   
                 
                </tr>
            </thead>
            <tbody>
                @forelse ($operators as $operator)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $operator->tanggal }}</td>
                        <td>{{ $operator->nama_operator }}</td>
                        <td>{{ $operator->nama_panti_asuhan }}</td>
                        <td>{{ $operator->nama_yayasan }}</td>
                        <td>{{ $operator->alamat }}</td>
                        <td>{{ $operator->provinsi }}</td>
                        <td>{{ $operator->kota_kabupaten }}</td>
                        <td>{{ $operator->kecamatan }}</td>
                        <td>{{ $operator->kelurahan }}</td>
                        <td>{{ $operator->no_rekening }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $operator->dokumen_akte_pendirian) }}" target="_blank">Lihat Dokumen</a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/' . $operator->sk_pengesahan) }}" target="_blank">Lihat SK</a>
                        </td>
                       
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="15" class="text-center">Tidak ada data operator.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
