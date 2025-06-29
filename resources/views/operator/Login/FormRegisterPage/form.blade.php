<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form · O-SEEK</title>

    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

body {
    font-family: "Open Sans", sans-serif;
}
body {
     
            margin: 0;
            height: 100vh; 
            position: relative; 
                background-image: linear-gradient(-180deg, #ffffff,#ffffff, #ffffff);
        }



        .navbar-nav .nav-item {
            margin: 0 30px; /* Beri jarak antar item */
        }

        .navbar-nav .nav-item:not(:last-child) {
            border-right: 1px solid #ccc; /* Sekat antar item */
            padding-right: 100px; /* Tambah padding di sebelah kanan sekat */
        }

        .navbar-nav .nav-link {
            padding: 10px 0; /* Menambah padding vertikal pada teks */
        }

        .custom-shadow {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            position: relative; /* Mengatur posisi relatif untuk navbar */
            z-index: 3; /* Z-index lebih tinggi agar navbar di atas gradient */
        }

        .container.d-flex {
            position: relative; /* Mengatur posisi relatif untuk card */
            z-index: 2; /* Card di atas gradient */
        }

       
   
    .verification-container {
        text-align: center;
        max-width: 400px;
        width: 90%;
    }
    .verification-container h2 {
        color: #2AB27B;
        font-size: 24px;
        margin-bottom: 10px;
    }
    .verification-container p {
        font-size: 16px;
        color: #333;
        margin-bottom: 20px;
    }
    .code-inputs {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 20px;
    }
    .code-inputs input {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 24px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }
    .resend-container {
        font-size: 14px;
        color: #666;
    }
    .resend-container a {
        color: #2AB27B;
        text-decoration: none;
        font-weight: bold;
    }
    .verify-button {
        background-color: #2AB27B;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        padding: 10px 0;
        width: 100%;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" border-bottom: 2px solid rgb(209, 209, 209);">
        <div class="container-fluid" style="background-color: #ececec; border-radius:30px;">
            <!-- Logo -->
            <div class="d-inline-flex p-2">
                <a class="navbar-brand"><img src="{{ asset('assets/img/logo.ini.png') }}" height="50" width="110"></a>
            </div>
    
            <!-- Toggler (Responsive Menu) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Links Pusat -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{'dashboard'}}"><b>Beranda</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'tentang'}}"><b>Tentang</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'daftar_panti'}}"><b>Panti Asuhan</b></a>
                    </li>
                </ul>
    
                <!-- Buttons -->
                <div class="d-inline-flex p-2">
    <button class="btn btn-success" type="button" style="width: 100px; background-color: #27A4DD; color: white; border-color: #27A4DD"><b>Berdonasi</b></button>
    &nbsp;&nbsp;
    <button class="btn btn-success" type="button" style="width: 100px; background-color: #000000; color: white; border-color: #000000" ><b>Login</b></button>
</div>

            </div>
        </div>
    </nav>

    {{-- @if(session('success'))
        <div class="alert alert-success mt-sm-3">
            {{ session('success') }}
        </div>
    @endif --}}


    <div class="container card mt-4 ">
        <br>
        <form action="{{ route('register_panti') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <center>
                    <h3><b>Masukkan Data Dibawah Ini Untuk Melakukan</b></h3>
                    <h3><b>Registrasi Panti Asuhanmu</b></h3>
                    <br>
                    <h5>Kami berkomitmen untuk menjaga keamanan dan kerahasiaan data Panti Asuhan Anda.</h5>
                    <h5>Semua informasi yang Anda bagikan dilindungi dengan protokol keamanan terkini.</h5>
                </center>
    
                <div class="row mt-5">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="nama_panti_asuhan" class="col-sm-4 col-form-label">Nama Panti Asuhan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_panti_asuhan" name="nama_panti_asuhan" maxlength="255" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_yayasan" class="col-sm-4 col-form-label">Nama Yayasan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_yayasan" name="nama_yayasan" maxlength="255" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_bank" class="col-sm-4 col-form-label" style="font-size: 0.9rem">Nama Bank</label>
                            <div class="col-sm-8">
                                <select class="form-select form-select-sm form-control" name="nama_bank" id="nama_bank" required aria-label=". form-select example">
                                    <option selected disabled value="">Pilih Bank</option>
                                    <option value="1">Mandiri</option>
                                    <option value="2">BCA</option>
                                    <option value="3">BJB</option>
                                    <option value="4">BRI</option>
                                    <option value="5">BNI</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dokumen_akte_pendirian" class="col-sm-4 col-form-label">Akte Pendirian</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="dokumen_akte_pendirian" name="dokumen_akte_pendirian" accept=".pdf" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sk_pengesahan" class="col-sm-4 col-form-label">SK Pengesahan</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="sk_pengesahan" name="sk_pengesahan" accept=".pdf" required>
                            </div>
                        </div>
                    </div>
        
                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="provinsi" class="col-sm-4 col-form-label" style="font-size: 0.9rem">Provinsi</label>
                            <div class="col-sm-8">
                                <select class="form-select form-select-sm" name="provinsi" id="provinsi" required aria-label=". form-select example">
                                    <option selected disabled value="">Pilih Provinsi</option>
                                    <option value="1">Jawa Barat</option>
                                    <option value="2">Provinsi 2</option>
                                    <option value="3">Provinsi 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kota_kabupaten" class="col-sm-4 col-form-label" style="font-size: 0.9rem">Kota/Kabupaten</label>
                            <div class="col-sm-8">
                                <select class="form-select form-select-sm" name="kota_kabupaten" id="kota_kabupaten" required aria-label=". form-select example">
                                    <option selected disabled value="">Pilih Kota/Kabupaten</option>
                                    <option value="1">Bandung</option>
                                    <option value="2">Kota/Kabupaten 2</option>
                                    <option value="3">Kota/Kabupaten 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kecamatan" class="col-sm-4 col-form-label" style="font-size: 0.9rem">Kecamatan</label>
                            <div class="col-sm-8">
                                <select class="form-select form-select-sm" name="kecamatan" id="kecamatan" required aria-label=". form-select example">
                                    <option selected disabled value="">Pilih Kecamatan</option>
                                    <option value="1">Batununggal</option>
                                    <option value="2">Cicendo</option>
                                    <option value="3">Bandung Kidul</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kelurahan" class="col-sm-4 col-form-label" style="font-size: 0.9rem">Kelurahan</label>
                            <div class="col-sm-8">
                                <select class="form-select form-select-sm" name="kelurahan" id="kelurahan" required aria-label=". form-select example">
                                    <option selected disabled value="">Pilih Kelurahan</option>
                                    <option value="1">Kacapiring</option>
                                    <option value="2">Cicadas</option>
                                    <option value="3">Cikutra</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_rekening" class="col-sm-4 col-form-label">No. Rekening</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="no_rekening" name="no_rekening" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dokumen_sosial" class="col-sm-4 col-form-label" style="font-size: 0.9rem">Dokumen Lembaga Kesejahteraan Sosial</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control form-control-sm" id="dokumen_sosial" name="dokumen_sosial" accept=".pdf" required>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Tombol Simpan -->
                <div class="d-flex justify-content-end">
                    <div class="m-2">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    
        <!-- Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h5 class="modal-title text-center text-danger fw-bold" id="successModalLabel">PEMBERITAHUAN !!!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <p>Data Panti Asuhanmu Akan Di Validasi Oleh Admin. Untuk Informasi Login Selanjutnya Akan Di Informasikan.</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('login_operator') }}" class="btn btn-primary">Ke Halaman Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <script>
        document.getElementById('submitButton').addEventListener('click', function (e) {
            e.preventDefault(); // Cegah form submit secara default

            const form = document.getElementById('registerForm');
            const formData = new FormData(form);

            // Kirim data ke server menggunakan fetch
            fetch("{{ route('register_panti') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                },
                body: formData,
            })
                .then(response => {
                    if (response.ok) {
                        // Tampilkan modal pop-up
                        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                        successModal.show();
                    } else {
                        return response.json().then(data => {
                            alert(data.message || "Terjadi kesalahan.");
                        });
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        });
    </script> --}}


{{-- <!-- Modal -->
<div class="modal fade" id="verticalycentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <center>
                    <h5 class="modal-title " id="exampleModalLabel" style="color: red"><b>PEMBERITAHUAN !!!</b></h5>
                </center>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="border-radius: 8px; padding: 30px 0;">
                <center>
                    <h6>Data Panti Asuhanmu Akan Di Validasi Oleh Admin.</h6> 
                       <h6>Untuk Informasi Login Selanjutnya Akan Di Informasikan </h6> 
                        <h6>Melalui Email Yang Terdaftar Pada Webiste O-Seek</h6>
              
                </center>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" 
                        style="background-color: #27A4DD; border-color: #27A4DD; color: white; width: 300px;" 
                        onclick="window.location.href='{{('login') }}'">Kembali Ke Beranda</button>
            </div>
        </div>
    </div>
</div> --}}


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    </body>
    
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

</html>