<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detail Data Regsitrasi Panti Asuhan</title>
</head>

<body>
    <h1>Detail Data Registrasi Panti Asuhan</h1>
    <ul>
        <li>Nama Panti Asuhan: {{ $registrasiPantiAsuhan->nama_panti_asuhan }}</li>
        <li>Nama Yayasan: {{ $registrasiPantiAsuhan->nama_yayasan }}</li>
        <li>Alamat: {{ $registrasiPantiAsuhan->alamat }}</li>
        <li>Provinsi: {{ $registrasiPantiAsuhan->provinsi }}</li>
        <li>Kota/Kabupaten: {{ $registrasiPantiAsuhan->kota_kabupaten }}</li>
        <li>Kecamatan: {{ $registrasiPantiAsuhan->kecamatan }}</li>
        <li>Kelurahan: {{ $registrasiPantiAsuhan->kelurahan }}</li>
        <li><strong>Dokumen Pendukung:</strong></li>
        <ul>
            @if ($registrasiPantiAsuhan->akte_pendirian_panti_asuhan)
            <li>Akte Pendirian: <a href="{{ asset('storage/' . $registrasiPantiAsuhan->akte_pendirian_panti_asuhan) }}" target="_blank">Lihat</a></li>
            @endif
            @if ($registrasiPantiAsuhan->surat_tanda_daftar)
            <li>Surat Tanda Daftar: <a href="{{ asset('storage/' . $registrasiPantiAsuhan->surat_tanda_daftar) }}" target="_blank">Lihat</a></li>
            @endif
            @if ($registrasiPantiAsuhan->lembaga_kesejahteraan_sosial)
            <li>Lembaga Kesejahteraan Sosial: <a href="{{ asset('storage/' . $registrasiPantiAsuhan->lembaga_kesejahteraan_sosial) }}" target="_blank">Lihat</a></li>
            @endif
            @if ($registrasiPantiAsuhan->sk_pengesahan_badan)
            <li>SK Pengesahan: <a href="{{ asset('storage/' . $registrasiPantiAsuhan->sk_pengesahan_badan) }}" target="_blank">Lihat</a></li>
            @endif
            @if ($registrasiPantiAsuhan->hukum_yayasan)
            <li>Hukum Yayasan: <a href="{{ asset('storage/' . $registrasiPantiAsuhan->hukum_yayasan) }}" target="_blank">Lihat</a></li>
            @endif
        </ul>
    </ul>
    <a href="{{ route('registrasi_panti_asuhan.index') }}" class="btn btn-secondary">Kembali</a>
</body>

</html>