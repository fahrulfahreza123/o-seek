<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif

    <h1>Tambah Data Registrasi Panti Asuhan</h1>
    <form action="{{ route('registrasi_panti_asuhan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Panti Asuhan</label>
            <input type="text" name="nama_panti_asuhan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Yayasan</label>
            <input type="text" name="nama_yayasan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Provinsi</label>
            <input type="text" name="provinsi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kota/Kabupaten</label>
            <input type="text" name="kota_kabupaten" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kelurahan</label>
            <input type="text" name="kelurahan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Akte Pendirian Panti Asuhan</label>
            <input type="file" name="akte_pendirian_panti_asuhan" class="form-control">
        </div>
        <div class="form-group">
            <label>Surat Tanda Daftar</label>
            <input type="file" name="surat_tanda_daftar" class="form-control">
        </div>
        <div class="form-group">
            <label>Lembaga Kesejahteraan Sosial</label>
            <input type="file" name="lembaga_kesejahteraan_sosial" class="form-control">
        </div>
        <div class="form-group">
            <label>SK Pengesahan Badan</label>
            <input type="file" name="sk_pengesahan_badan" class="form-control">
        </div>
        <div class="form-group">
            <label>Hukum Yayasan</label>
            <input type="file" name="hukum_yayasan" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</body>

</html>