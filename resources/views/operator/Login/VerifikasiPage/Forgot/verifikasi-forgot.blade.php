<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi · O-SEEK</title>

    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    font-family: "Open Sans", sans-serif;
}

        body {
            margin: 0;
            height: 100vh; /* Mengatur tinggi body mengisi viewport */
            position: relative; /* Mengatur posisi relatif untuk pseudo-elements */
                background-image: linear-gradient(-180deg, #305F72,#FEE6A8, #C5E1F6);
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

        
    .code-inputs {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-bottom: 5px;
    }
    .code-inputs input {
        width: 100px;
        height: 100px;
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
        color: #2BB673;
        text-decoration: none;
        font-weight: bold;
    }
    .verify-button {
        background-color: green;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        padding: 10px 0;
        width: 100%;
        cursor: pointer;
    }

    .modal-header {
            display: flex;
            justify-content: center; /* Menyelaraskan secara horizontal ke tengah */
            position: relative;
            color: #27A9E0;
            font-size: 20px;
        }
        .modal-header .close {
            position: absolute;
            right: 1rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-shadow" style=" border-bottom: 2px solid rgb(209, 209, 209);">
        <div class="container-fluid" style="background-color: #ececec; border-radius:30px;">
        <div class="d-inline-flex p-2">
            <a class="navbar-brand"><img src="{{ asset('assets/img/logo.ini.png') }}" height="50" width="110"></a>
        </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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

                <div class="d-inline-flex p-2">
            <button class="btn btn-success" type="button" style="width: 100px; background-color: #27A4DD; color: white; border-color: #27A4DD"><b>Berdonasi</b></button>
            &nbsp;&nbsp;
            <button class="btn btn-success" type="button" style="width: 100px; background-color: #000000; color: white; border-color: #000000" ><b>Login</b></button>
        </div>
            </div>
       
        </div>
    </nav>

 
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card text-center" style="width: 850px; height: 555px; border-radius: 20px;">
            <div class="card-body ">
               <div class="card-body mt-5">
                   <h2 style="color: #2BB673">Verifikasi Akun</h2>
                   <p>Silahkan masukkan 4 digit kode verifikasi yang dikirim ke Email anda.</p>
                   <br><br>
                   <div class="code-inputs">
                       <input type="text" maxlength="1">
                       <input type="text" maxlength="1">
                       <input type="text" maxlength="1">
                       <input type="text" maxlength="1">
                   </div>
                   <br><br>
                   <div class="resend-container mt-1">
                       Tidak Mendapatkan Kode? <a href="#">Kirim Ulang</a>
                   </div>
                   
                   <div class="container text-center mt-4">
                    <!-- Button to trigger modal -->
                    <!-- Button to Trigger Modal -->
<button class="btn btn-success custom-login-btn" style="width: 400px; height:60px; font-size:25px; background-color: #2BB673; border-color: #2BB673" data-toggle="modal" data-target="#successModal">
    Verifikasi
</button>
<style>
    /* Normal state */
    .custom-login-btn {
        padding: 14px;
        font-size: 20px;
        background-color: #2BB673;
        border-color: #2BB673;
        color: white;
        transition: all 0.3s ease; /* Smooth transition */
    }

    /* Hover state */
    .custom-login-btn:hover {
        background-color: #249d60; /* Warna latar lebih gelap */
        border-color: #249d60;
        color: white; /* Tetap putih untuk teks */
        transform: scale(1.05); /* Sedikit memperbesar */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Efek bayangan */
    }
</style>
<!-- Modal Structure -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-center">
            <div class="modal-header border-0">
                <h3 class="modal-title w-100  font-weight-bold" id="modalTitle" style="color: #27A9E0;">SELAMAT!</h3>
            </div>
            <div class="modal-body">
                <p class="mb-2">Verifikasi Akun Anda telah <strong>BERHASIL</strong>.</p>
                <p>Silahkan untuk mengisi Form Data Panti Asuhan</p>
            </div>
            <div class="modal-footer justify-content-center border-0">
                <button type="button" class="btn btn-primary" style="width: 150px; font-size: 18px; background-color: #27A9E0; border-color: #27A9E0;" data-dismiss="modal" onclick="window.location.href='{{('FormSandi') }}'">OKE</button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-header {
    border-bottom: none;
}

.modal-footer {
    border-top: none;
}

.modal-title {
    color: #27A9E0; /* Warna biru untuk "SELAMAT!" */
    font-size: 30px;
    font-weight: bold;
}

.modal-body p {
    font-size: 16px;
    color: #333;
}

</style>
                </div>
                
                
            


               </div>
            </div>
        </div>
    </div>
    
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Bootstrap 4.5.2 CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 4.5.2 JS (with jQuery and Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>