<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Registrasi Panti Asuhan</title>
</head>

<!-- Link ke CSS Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ+6wA+YgMWs9k5ikS5hxZZy++hFzOjsA9Zq6Ulx0quZlUoGz5AP/11yQVOY" crossorigin="anonymous">

<!-- Link ke JS Bootstrap 5 (termasuk Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka8Aa5zIbjiKpew88h4toS67rdS5c+sz4msF7V2RudRbVn6L4VwwrB7qGJSH9pm5" crossorigin="anonymous"></script>


<body>
    <h1>Data Registrasi Panti Asuhan</h1>
    <a href="{{ route('registrasi_panti_asuhan.create') }}" class="btn btn-primary">Tambah Data</a>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-container mt-7">
        <div class="table-container mt-7">
            <table class="table table-striped table-bordered">
                <thead class="table-header" id="tabel-stripet">
                    <tr>
                        <th scope="col" style="background-color: #305f72; color:white">No</th>
                        <th scope="col" style="background-color: #305f72; color:white">Nama Panti Asuhan</th>
                        <th scope="col" style="background-color: #305f72; color:white">Nama Yayasan</th>
                        <th scope="col" style="background-color: #305f72; color:white">Provinsi</th>
                        <th scope="col" style="background-color: #305f72; color:white">Kota/Kabupaten</th>
                        <th scope="col" style="background-color: #305f72; color:white">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registrasiPantiAsuhans as $key => $registrasiPantiAsuhan)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $registrasiPantiAsuhan->nama_panti_asuhan }}</td>
                        <td>{{ $registrasiPantiAsuhan->nama_yayasan }}</td>
                        <td>{{ $registrasiPantiAsuhan->provinsi }}</td>
                        <td>{{ $registrasiPantiAsuhan->kota_kabupaten }}</td>
                        <td>
                            <!-- Tombol Detail -->
                            <a href="{{ route('registrasi_panti_asuhan.show', $registrasiPantiAsuhan->id) }}" class="btn btn-info btn-sm">Detail</a>
        
                            <!-- Form Hapus -->
                            <form action="{{ route('registrasi_panti_asuhan.destroy', $registrasiPantiAsuhan->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    
</body>


</html>